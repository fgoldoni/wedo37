<?php
namespace App\Http\Livewire\Wedo\Home;

use Livewire\Component;

class SearchForm extends Component
{
    public ?string $model = null;

    public ?int $jobId = null;

    public ?int $categoryId = null;

    public function rules(): array
    {
        return [
            'jobId' => ['nullable', 'int'],
            'categoryId' => ['nullable', 'int'],
        ];
    }

    public function save()
    {
        $filters = [];
        $this->validate();

        if ($this->jobId) {
            return  $this->redirectRoute('jobs.show', $this->jobId);
        }

        if ($this->categoryId) {
            $filters['categories'][] = $this->categoryId;
            return  $this->redirectRoute('jobs.index', ['filters' => $filters]);
        }

        return  $this->redirectRoute('jobs.index');
    }

    public function render()
    {
        return view('livewire.wedo.home.search-form');
    }
}
