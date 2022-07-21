<?php
namespace App\Models;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Resume extends Model
{
    use Sushi;

    use WithCachedRows;

    public function getRows(): array
    {
        $this->useCachedRows();

        $items = $this->cache(
            fn () => app()->make(ApiInterface::class)->get('/resumes')->data,
            config('app.system.cache.keys.resumes')
        );

        return app()->make(ApiInterface::class)->toArray($items);
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
