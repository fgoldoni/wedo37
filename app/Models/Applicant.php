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

    public function getRows(): array
    {
        $this->useCachedRows();

//        $items = $this->cache(
//            fn () => app()->make(ApiInterface::class)->get('/applicants')->data,
//            config('app.system.cache.keys.applicants')
//        );

        return [
            ['id' => 1, 'name' => 'admin', 'url' => 'admin', 'created_at' => 'admin', 'mime_type' => 'application/pdf'],
            ['id' => 2, 'name' => 'manager', 'url' => 'admin', 'created_at' => 'admin', 'mime_type' => 'application/pdf'],
            ['id' => 3, 'name' => 'user', 'url' => 'admin', 'created_at' => 'admin', 'mime_type' => 'application/pdf'],
        ];
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
