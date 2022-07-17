<?php

namespace App\Http\Controllers\Wedo;


use App\Http\Controllers\Controller;

class JobController extends Controller
{
    public function index()
    {
        return view('wedo.jobs');
    }
}
