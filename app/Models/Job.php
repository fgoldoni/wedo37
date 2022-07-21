<?php
namespace App\Models;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Job extends Model
{
    use Sushi;

    use WithCachedRows;

    public function getRows(): array
    {
        $this->useCachedRows();

        $jobs = [];

        $items = $this->cache(
            fn () => app()->make(ApiInterface::class)->get('/jobs')->data,
            config('app.system.cache.keys.jobs')
        );

        foreach ($items as $item) {
            $jobs[] = [
                'id' => $item->id,
                'name' => $item->name,
            ];
        }

        return $jobs;
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
