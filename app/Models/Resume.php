<?php

namespace App\Models;

use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Resume extends Model
{
    use Sushi;

    public function __construct(array $attributes = [])
    {
        $this->api = app()->make(ApiInterface::class);

        parent::__construct($attributes);
    }

    public function getRows(): array
    {
        return json_decode(json_encode($this->api->get('/resumes')->data), true);
    }

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
