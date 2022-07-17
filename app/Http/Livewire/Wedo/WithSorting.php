<?php

namespace App\Http\Livewire\Wedo;

trait WithSorting
{
    public array $sorts = [];

    public string $sortField = 'id';

    public string $sortDirection = 'asc';

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field
            ? $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc'
            : 'asc';

        $this->sortField = $field;
    }

    public function applySorting($query)
    {
        return $query->orderBy($this->sortField, $this->sortDirection);
    }
}
