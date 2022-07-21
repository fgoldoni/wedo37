<?php

namespace App\Services;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Models\WedoUser;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WedoAuthService
{
    use WithCachedRows;

    public static function retrieveUser(string $token): WedoUser
    {
        return Cache::rememberForever(static::getCacheKey($token), function () use ($token) {
            $response = Http::withToken($token)->get(env('API_URL') . "/api/user");

            $user = $response->json();

            $user['token'] = $token;

            return new WedoUser($user);
        });
    }

    public static function loginWithToken(string $token): WedoUser
    {
        $response = Http::withToken($token)->get(env('API_URL') . "/api/user");

        $user = $response->json();

        $user['token'] = $token;

        return static::auth(new WedoUser($user));
    }

    private static function auth(WedoUser $user): WedoUser
    {
        static::forgetCache();

        static::session($user);

        static::bind($user);

        static::login($user);

        return $user;
    }

    protected static function session(WedoUser $user): void
    {
        session(['token' => $user->token]);
    }

    protected static function bind(WedoUser $user): void
    {
        app()->bind('user', static fn (): WedoUser => $user);

        app()->bind('token', static fn (): string => session('token'));
    }

    protected static function login(WedoUser $user): void
    {
        Auth::login($user, true);
    }

    private static function getCacheKey(string $token)
    {
        return "wedo.{$token}";
    }

    public static function loginLink(string $email): Response
    {
        return Http::post(env('API_URL') . "/api/sanctum/token/link", [
            'email' => $email,
            'host' => url('/'),
            'to' => url('/'),
        ]);
    }

    public static function forgetCache()
    {
        cache()->forget(config('app.system.cache.keys.resumes'));
        cache()->forget(config('app.system.cache.keys.applicants'));
        cache()->forget(config('app.system.cache.keys.attachments'));
        cache()->forget(config('app.system.cache.keys.jobs'));
    }
}
