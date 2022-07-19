<?php

namespace App\Http\Controllers\Wedo;


use App\Http\Controllers\Controller;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;

class JobController extends Controller
{
    use WithCachedRows;


    public function __construct(private readonly ApiInterface $api)
    {
    }

    public function index()
    {
        return view('wedo.jobs');
    }

    public function show(int $id, string $slug)
    {
        $this->useCachedRows();

        $job = $this->cache(fn () => $this->apiJob($id), 'current-job-' . $id);

        return view('wedo.jobs.show', compact('job'));
    }

    private function apiJob(int $id)
    {
        return $this->api->get( '/jobs/' . $id)->data;
    }
}
