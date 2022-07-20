<?php

namespace App\Http\Livewire\Wedo\Datatables;

use App\Models\Resume;
use JetBrains\PhpStorm\ArrayShape;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ResumesTable extends DataTableComponent
{
    protected $model = Resume::class;

    public array $columnSearch = [
        'name' => null,
    ];

    protected $listeners = ['onRefreshResume' => '$refresh'];


    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setSearchDebounce(1000);

        $this->setHideBulkActionsWhenEmptyEnabled();

        $this->setColumnSelectDisabled();

        $this->setPerPageAccepted([5, 10, 25, 50, 100]);
    }

    #[ArrayShape(['Delete' => "string"])]
    public function bulkActions(): array
    {
        return [
            'Delete' => 'Delete',
        ];
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')->sortable()->setSortingPillTitle('Key')->setSortingPillDirections('0-9', '9-0')->searchable(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('mime_type', 'mime_type')->sortable()->deselected(),
            Column::make('Download', 'url')
                ->searchable()
                ->format(
                    fn ($value, $row, Column $column) => view('components.wedo.datatables.views.download')->withRow($row)
                ),
        ];
    }
}
