<?php

use App\Http\Middleware\EnsureTeamMiddleware;

if (!function_exists('app_team')) {
    function app_team()
    {
        return \App\Http\Middleware\EnsureTeamMiddleware::companyFromCache();
    }
}

if (!function_exists('app_areas')) {
    function app_areas(): array
    {
        return array_values((array) app_team()->areas);
    }
}

if (!function_exists('app_color')) {
    function app_color(): string
    {
        return app_team()->color;
    }
}

if (!function_exists('app_team_avatar')) {
    function app_team_avatar(): string
    {
        return app_team()->avatar;
    }
}

if (!function_exists('app_team_name')) {
    function app_team_name(): string
    {
        return app_team()->display_name;
    }
}

if (!function_exists('app_job_types')) {
    function app_job_types(): array
    {
        return app_team()->jobTypes;
    }
}

if (!function_exists('app_event')) {
    function app_event(): ?object
    {
        return app_team()->event;
    }
}

if (!function_exists('cache_path')) {
    function cache_path(string $path): string
    {
        return EnsureTeamMiddleware::cachePrefix(config('app.system.cache.keys.' . $path));
    }
}

if (!function_exists('app_cart_id')) {
    function app_cart_id(): string
    {
        return EnsureTeamMiddleware::sessionCartKey();
    }
}

if (!function_exists('app_session_cart')) {
    function app_session_cart(): ?\stdClass
    {
        return EnsureTeamMiddleware::sessionCart();
    }
}

if (!function_exists('app_session_cart_store')) {
    function app_session_cart_store($data)
    {
        return  session()->put(EnsureTeamMiddleware::cartId(), $data);
    }
}
