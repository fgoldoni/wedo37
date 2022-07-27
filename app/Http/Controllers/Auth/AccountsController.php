<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\Contracts\ApiInterface;

class AccountsController extends Controller
{
    public function __construct(private readonly ApiInterface $api)
    {
    }

    public function index()
    {
        return view('wedo.accounts.index');
    }

}
