<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;

class ConfirmationController extends Controller
{
    public function index()
    {
        return view('wedo.confirmation.index');
    }
}
