<?php
namespace App\Models;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Ticket extends Model
{
    use Sushi;

    public static string $apiModel = 'Modules\Tickets\Entities\Ticket';

    public static string $apiPrefix = 'ticket-';

    public function getRows(): array
    {
        $tickets = [];

        $items = app()->make(ApiInterface::class)->get('/tickets', ['event_id' => app_event()->id])->data;

        foreach ($items as $item) {
            $tickets[] = [
                'id' => $item->id,
                'name' => $item->name,
                'description' => $item->description,
                'quantity' => $item->quantity,
                'attendees' => $item->attendees,
                'price' => $item->price,
                'type' => $item->type,
                'event_id' => $item->event_id,
                'position' => $item->position,
                'color' => $item->color,
                'avatar_url' => $item->avatar_url,
                'tags' => json_encode($item->tags),
            ];
        }

        return $tickets;
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
