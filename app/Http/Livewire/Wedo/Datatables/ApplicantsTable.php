<?php
namespace App\Http\Livewire\Wedo\Datatables;

use App\Http\Livewire\Wedo\Applicants\Browse;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Applicant;
use JetBrains\PhpStorm\ArrayShape;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use WireUi\Traits\Actions;

class ApplicantsTable extends DataTableComponent
{
    use Actions;

    protected $model = Applicant::class;

    public array $columnSearch = ['name' => null];

    protected $listeners = ['onRefreshApplicant' => '$refresh'];

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        $this->setSearchDebounce(1000);

        $this->setHideBulkActionsWhenEmptyEnabled();

        $this->setPerPageAccepted([5, 10, 25, 50, 100]);
    }

    #[ArrayShape(['Delete' => 'string'])]
    public function bulkActions(): array
    {
        return [
            'dialogConfirm' => 'Remove',
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
            ->delete('/applicants/destroy', ['selected' => $this->getSelected()]);

        Applicant::whereIn('id', $this->getSelected())->delete();

        $this->clearSelected();

        $this->emitTo(Browse::class, 'onRefreshBrowse');

        $this->notification()->info(__('Deleted'), __('Applicant has been successfully deleted!'));
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable()->setSortingPillTitle('Key')
                ->setSortingPillDirections('0-9', '9-0')
                ->searchable(),
            Column::make('Job', 'job_name')
                ->sortable()
                ->searchable()
                ->format(
                    fn ($value, $row, Column $column) => view('components.wedo.datatables.views.job')->withRow($row)
                ),
            Column::make('Created', 'created_at')
                ->sortable()
                ->searchable(),
            Column::make('Candidate', 'candidate_name')
                ->searchable()
                ->sortable()
                ->format(
                    fn (
                        $value,
                        $row,
                        Column $column
                    ) => view('components.wedo.datatables.views.candidate')->withRow($row)
                ),
            Column::make('Resume', 'mime_type')
                ->searchable()
                ->sortable()
                ->format(
                    fn ($value, $row, Column $column) => view('components.wedo.datatables.views.mime')->withRow($row)
                ),
            Column::make('Status', 'status')
                ->searchable()
                ->sortable()
                ->format(
                    fn (
                        $value,
                        $row,
                        Column $column
                    ) => view('components.wedo.datatables.views.status')->withRow($row)
                ),
            Column::make('Job Id', 'job_id')->deselected(),
            Column::make('City', 'job_city')->deselected(),
            Column::make('Job Avatar', 'job_avatar_url')->deselected(),
            Column::make('Country', 'job_country_emoji')->deselected(),
            Column::make('Candidate Id', 'candidate_id')->deselected(),
            Column::make('Candidate Email', 'candidate_email')->deselected(),
            Column::make('Candidate Avatar', 'candidate_profile_photo_url')->deselected(),
            Column::make('Resume url', 'url')->deselected(),
        ];
    }
}
