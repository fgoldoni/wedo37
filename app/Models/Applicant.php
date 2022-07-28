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

        $results = [];

        if (auth()->check()) {
            $response = $this->cache(
                fn () => app()->make(ApiInterface::class)->get('/applicants')->data,
                cache_path('applicants')
            );

            $items = app()->make(ApiInterface::class)->toArray($response);

            foreach ($items as $item) {
                $results[] = [
                    'id' => $item['id'],
                    'phone' => $item['phone'],
                    'message' => $item['phone'],
                    'email' => '',
                ];
            }
        }

        return $results;
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
