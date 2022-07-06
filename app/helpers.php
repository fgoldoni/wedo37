<?php

if (! function_exists('app_team')) {
    function app_team() {
        return \App\Http\Middleware\EnsureTeamMiddleware::companyFromCache();
    }
}
