<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;

class ExtrasController extends Controller
{
    public function index()
    {
        return view('wedo.extras.index');
    }
}
