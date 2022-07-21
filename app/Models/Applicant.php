<?php
namespace App\Models;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Applicant extends Model
{
    use Sushi;

    use WithCachedRows;

    protected $guarded = [];

    public function getRows(): array
    {
        $this->useCachedRows();

        if (auth()->check()) {
            $items = $this->cache(
                fn () => app()->make(ApiInterface::class)->get('/applicants')->data,
                config('app.system.cache.keys.applicants')
            );

            return app()->make(ApiInterface::class)->toArray($items);
        }

        return [];
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
