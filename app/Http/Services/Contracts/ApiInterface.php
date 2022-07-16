<?php

namespace App\Http\Services\Contracts;

interface ApiInterface
{
    public function get(string $endpoint, array $data = []): \stdClass;
}
