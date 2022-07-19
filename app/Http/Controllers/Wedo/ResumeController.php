<?php

namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Services\Contracts\ApiInterface;

class ResumeController extends Controller
{

    public function __construct(private ApiInterface $api)
    {
    }

    public function index()
    {
        return view('wedo.resumes.index');
    }
}
