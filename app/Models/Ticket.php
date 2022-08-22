<?php
namespace App\Models;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Ticket extends Model
{
    use Sushi;

    use WithCachedRows;

    public static string $apiModel = 'Modules\Tickets\Entities\Ticket';

    public static string $apiPrefix = 'ticket-';

    public function getRows(): array
    {
        $tickets = [];

        $items = $this->cache(
            fn () => app()->make(ApiInterface::class)->get('/tickets')->data,
            cache_path('tickets')
        );

        foreach ($items as $item) {
            $tickets[] = [
                'id' => $item->id,
                'name' => $item->name,
                'description' => $item->description,
                'price' => $item->price,
                'type' => $item->type,
                'event_id' => $item->event_id,
                'position' => $item->position,
                'color' => $item->color,
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
