<?php
namespace App\Http\Livewire\Wedo\Datatables;

use App\Http\Livewire\Wedo\Resumes\Browse;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Resume;
use JetBrains\PhpStorm\ArrayShape;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use WireUi\Traits\Actions;

class ResumesTable extends DataTableComponent
{
    use Actions;

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

    #[ArrayShape(['Delete' => 'string'])]
    public function bulkActions(): array
    {
        return [
            'dialogConfirm' => 'Delete',
        ];
    }

    public function dialogConfirm()
    {
        $this->dialog()->confirm([
            'title' => 'Are you Sure ?',
            'description' => 'Delete the information?',
            'icon' => 'error',
            'accept' => [
                'label' => 'Yes, delete it',
                'method' => 'delete',
            ],
            'reject' => [
                'label' => 'No, cancel',
            ],
        ]);
    }

    public function delete()
    {
        app()->make(ApiInterface::class)
            ->delete('/resumes/destroy', ['selected' => $this->getSelected()]);

        Resume::whereIn('id', $this->getSelected())->delete();

        $this->clearSelected();

        $this->emitTo(Browse::class, 'onRefreshBrowse');

        $this->notification()->info(__('Deleted'), __('Resume has been successfully deleted!'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable()
                ->setSortingPillTitle('Key')
                ->setSortingPillDirections('0-9', '9-0')
                ->searchable(),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Created', 'created_at')
                ->sortable()
                ->searchable(),
            Column::make('File', 'mime_type')
                ->searchable()
                ->sortable()
                ->format(
                    fn ($value, $row, Column $column) => view('components.wedo.datatables.views.mime')->withRow($row)
                ),
            Column::make('Download', 'url')
                ->searchable()
                ->format(
                    fn (
                        $value,
                        $row,
                        Column $column
                    ) => view('components.wedo.datatables.views.download')->withRow($row)
                ),
        ];
    }
}
