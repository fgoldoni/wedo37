<?php

namespace App\Models;

use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Resume extends Model
{
    use Sushi;

    public function getRows(): array
    {
        return json_decode(json_encode(app()->make(ApiInterface::class)->get('/resumes')->data), true);
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
