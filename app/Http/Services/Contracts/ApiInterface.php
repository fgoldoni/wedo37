<?php

namespace App\Http\Services\Contracts;

interface ApiInterface
{
    public function get(string $endpoint, array $data = []): \stdClass;

    public function post(string $endpoint, array $data = []): ?\stdClass;

    public function put(string $endpoint, array $data = []): ?\stdClass;

    public function delete(string $endpoint, array $data = []);
}
