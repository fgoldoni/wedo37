<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        return view('wedo.checkout.index');
    }
}
