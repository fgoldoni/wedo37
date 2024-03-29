<?php
namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

                    return $response->ok()
                        ? $response->object()->data
                        : throw new Exception('Team not found for ' . $subDomain, 500);
                });

                Cache::rememberForever(self::cacheTeamKey(), fn () => $team->id);
            } else {
                throw new Exception('Invalid subdomain', Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        } catch (Exception $e) {
            return response()->json([$e->getMessage()], 500);
        }

        return $next($request);
    }

    public static function getCacheKey(string $subDomain): string
    {
        return "wedo37.{$subDomain}";
    }

    private static function getSubDomain(): ?string
    {
        preg_match('/(?:http[s]*\:\/\/)*(.*?)\.(?=[^\/]*\..{2,5})/i', url('/'), $match);

        if (count($match) < 2) {
            return null;
        }

        return urlencode((string) $match[1]) ?? null;
    }

    public static function companyFromCache()
    {
        return Cache::get(self::getCacheKey(self::getSubDomain()));
    }

    public static function teamId()
    {
        return Cache::get(self::cacheTeamKey());
    }

    public static function cacheTeamKey(): string
    {
        return cache_path('team');
    }

    public static function cachePrefix($path): string
    {
        return static::getCacheKey(self::getSubDomain()) . '-' . $path;
    }
}
