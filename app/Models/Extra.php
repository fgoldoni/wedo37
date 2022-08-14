<?php
namespace App\Models;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Extra extends Model
{
    use Sushi;

    use WithCachedRows;

    private static string $apiModel = 'Modules\Extras\Entities\Extra';

    public function getRows(): array
    {
        $tickets = [];

        $items = $this->cache(
            fn () => app()->make(ApiInterface::class)->get('/extras')->data,
            cache_path('extras')
        );

        foreach ($items as $item) {
            $tickets[] = [
                'id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
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
