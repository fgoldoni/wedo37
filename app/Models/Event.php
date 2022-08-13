<?php
namespace App\Models;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Event extends Model
{
    use Sushi;

    use WithCachedRows;

    public function getRows(): array
    {
        $tickets = [];

        $items = $this->cache(
            fn () => app()->make(ApiInterface::class)->get('/events')->data,
            cache_path('events')
        );

        foreach ($items as $item) {
            $tickets[] = [
                'id' => $item->id,
                'name' => $item->name,
                'description' => $item->description,
                'avatar_url' => $item->avatar_url,
            ];
        }

        return $tickets;
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
