<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class EnsureTeamMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {

            if ($subDomain = self::getSubDomain()) {

                $team = Cache::rememberForever(static::getCacheKey($subDomain), function () use ($subDomain) {

                    $response = Http::acceptJson()->get(env('API_URL') . "/api/teams/{$subDomain}");

                    return $response->ok() ? $response->object() : throw new Exception('Team not found for ' . $subDomain, 500);
                });

                session()->put('team-id', $team->data->id);
            }
        } catch (Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }

        return $next($request);

    }

    public static function getCacheKey(string $subDomain): string {
        return "wedo37.{$subDomain}";
    }

    private static function getSubDomain():? string
    {
        preg_match('/(?:http[s]*\:\/\/)*(.*?)\.(?=[^\/]*\..{2,5})/i', url('/'), $match);

        return $match[1] ?? null;
    }
}
