<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Services\Contracts\ApiInterface;

class ShortlistedController extends Controller
{
    public function __construct(private readonly ApiInterface $api)
    {
    }

    public function index()
    {
        return view('wedo.shortlisted.index');
    }
}
