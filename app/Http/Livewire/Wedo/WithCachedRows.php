<?php

namespace App\Http\Livewire\Wedo;

trait WithCachedRows
{
    protected bool $useCache = false;

    public function useCachedRows()
    {
        $this->useCache = true;
    }

    public function cache($callback, ?string $key = null)
    {
        $cacheKey = $key ?? $this->id;

        if ($this->useCache && cache()->has($cacheKey)) {
            return cache()->get($cacheKey);
        }

        $result = $callback();

        cache()->put($cacheKey, $result);

        return $result;
    }

    public function forget($key)
    {
        cache()->forget($key);
    }
}
