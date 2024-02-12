<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

use MoonShine\Fields\Image;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;

/**
 * @extends ModelResource<Employee>
 */
class EmployeeResource extends ModelResource
{
    protected string $model = Employee::class;

    public string $column = 'fullname';
    protected bool $createInModal = true;
    protected bool $editInModal = true;
    protected bool $detailInModal = true;
    protected bool $isAsync = true;
    public function __construct()
    {
        $this->title = __('moonshine::ui.resource.employees.title');
    }

    public function getActiveActions(): array
    {
        return ['create', 'update', 'delete'];
    }

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function search(): array
    {
        return [];
    }

    public function fields(): array
    {
        return [

            Block::make([
                Text::make(__('moonshine::ui.resource.employees.fullname'), 'fullname')
                    ->required()
                    ->sortable(),

                Text::make(__('moonshine::ui.resource.employees.position'), 'position')
                    ->required()
                    ->sortable(),

                Image::make(__('moonshine::ui.resource.employees.image'), 'image')
                    ->dir('public/images/team/')
                    ->sortable(),

                Select::make(__('moonshine::ui.resource.employees.status'), 'status')
                    ->options([
                        0 => __('moonshine::ui.resource.employees.no_active'),
                        1 => __('moonshine::ui.resource.employees.active')
                    ])
                    ->sortable(),
            ]),
        ];
    }

    protected function afterUpdated(Model $item): Model
    {
        $item->update(['updated_at' => Carbon::now()]);
        return $item;
    }

    protected function afterCreated(Model $item): Model
    {
        $item->update(['created_at' => Carbon::now()]);
        return $item;
    }

    public function rules(Model $item): array
    {
        return [];
    }
    public function filters(): array
    {
        return [
            Text::make(__('moonshine::ui.resource.employees.fullname'), 'fullname'),
            Text::make(__('moonshine::ui.resource.employees.position'), 'position'),
            Select::make(__('moonshine::ui.resource.employees.status'), 'status')
                ->options([
                    0 => __('moonshine::ui.resource.employees.no_active'),
                    1 => __('moonshine::ui.resource.employees.active')
                ])
        ];
    }
}
