<?php

namespace App\Http\Services;

use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class Api
 *
 * @package \App\Http\Services
 */
class Api implements ApiInterface
{
    private readonly Factory $http;

    private readonly string $apiUrl;

    private readonly \Illuminate\Http\Client\Response|\GuzzleHttp\Promise\PromiseInterface $response;

    private readonly PendingRequest $client;

    public function __construct(Factory $http)
    {
        $this->client = $http->withHeaders(['X-Team-Id' => session('team-id')])
            ->acceptJson()
            ->withToken(Auth::user()?->token);

        $this->apiUrl = env('API_URL', 'http://localhost:8000') . '/api';
    }

    public function get(string $endpoint, array $data = []): \stdClass
    {
        return $this->client->get($this->apiUrl . $endpoint, $data)->object();
    }

    public function post(string $endpoint, array $data = []): \stdClass
    {
        return $this->client->post($this->apiUrl . $endpoint, $data)->object();
    }

    public function attach($file): self
    {
        $this->client->attach(
            'attachment', file_get_contents($file->getRealPath()), $file->getClientOriginalName()
        );

        return $this;
    }

    public function response(string $format = null)
    {
        return match ($format) {
            'array' => $this->response->json(),
             default => $this->response->object(),
        };
    }
}
