<?php

namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function index()
    {
        return view('wedo.applicants.index');
    }
}
