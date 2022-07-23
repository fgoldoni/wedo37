<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Applicant;

class ApplicantsController extends Controller
{
    public function __construct(private readonly ApiInterface $api)
    {
    }

    public function index()
    {
        return view('wedo.applicants.index');
    }

    public function show(Applicant $applicant)
    {
        return view('wedo.applicants.show', compact('applicant'));
    }
}
