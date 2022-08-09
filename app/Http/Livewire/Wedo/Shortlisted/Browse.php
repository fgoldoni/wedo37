<?php
namespace App\Http\Livewire\Wedo\Shortlisted;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithCachedRows;

    use Actions;

    public function mount()
    {
    }

    public function detach(int $jobId)
    {
        if (auth()->guest()) {
            return $this->redirectRoute('login', ['to' => url()->current()]);
        }

        $response = app()->make(ApiInterface::class)->post(
            '/jobs/detach',
            [
                'job_id' => $jobId,
            ]
        );

        $this->notification()->info(__('Great!!'), $response->message);
    }

    public function getShowQueryProperty()
    {
        return app()->make(ApiInterface::class)->get('/jobs/' . $this->show)->data;
    }

    public function getRowsQueryProperty()
    {
        return app()->make(ApiInterface::class)->get('/jobs/shortlisted');
    }

    public function getRowsProperty()
    {
        return $this->cache(fn () => $this->rowsQuery);
    }

    public function render()
    {
        return view('livewire.wedo.shortlisted.browse', ['rows' => $this->rows]);
    }
}
