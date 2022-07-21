<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;

class ApplicantsController extends Controller
{
    public function index()
    {
        return view('wedo.applicants.index');
    }
}
