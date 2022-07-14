<?php

if (! function_exists('app_team')) {
    function app_team()
    {
        return \App\Http\Middleware\EnsureTeamMiddleware::companyFromCache();
    }
}

if (! function_exists('app_areas')) {
    function app_areas(): array
    {
        return array_values((array) app_team()->areas);
    }
}
