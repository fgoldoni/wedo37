<?php

namespace App\Http\Livewire\Wedo\Datatables;

use App\Models\Resume;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ResumesTable extends DataTableComponent
{
    protected $model = Resume::class;

    public array $columnSearch = [
        'name' => null,
    ];


    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->sortable()
                ->searchable(),
            Column::make('Name')
                ->sortable()
                ->searchable(),
        ];
    }
}
