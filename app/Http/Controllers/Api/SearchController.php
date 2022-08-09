<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct(
        private readonly ApiInterface $api,
    ) {
    }

    public function categories(Request $request)
    {
        return $this->api->get('/categories/search', $request->all())->data;
    }

    public function jobs(Request $request)
    {
        return $this->api->get('/search/jobs', $request->all())->data;
    }
}
