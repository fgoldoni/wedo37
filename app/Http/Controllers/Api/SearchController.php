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
        $data = $this->api->get('/categories/search', $request->all())->data;

        foreach ($data as $item) {
            $resp[] = [
                'id' => $item->id,
                'name' => $item->name,
            ];
        }
        return $data;
    }
}
