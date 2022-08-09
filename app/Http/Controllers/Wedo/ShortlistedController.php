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
        $rows = $this->api->get('/jobs/shortlisted');
        return view('wedo.shortlisted.index', compact(['rows']));
    }
}
