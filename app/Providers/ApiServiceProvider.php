<?php
namespace App\Providers;

use App\Http\Services\Api;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    protected bool $defer = false;

    public function boot()
    {
        $this->app->bind(ApiInterface::class, Api::class);
    }
}
