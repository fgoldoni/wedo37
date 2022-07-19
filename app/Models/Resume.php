<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Resume extends Model
{
    use Sushi;


    protected array $rows = [
        ['id' => 1, 'name' => 'admin'],
        ['id' => 2, 'name' => 'manager'],
        ['id' => 3, 'name' => 'user'],
    ];

    public static function get($columns = ['*'])
    {
        return static::all($columns);
    }
}
