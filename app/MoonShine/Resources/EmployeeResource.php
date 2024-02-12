<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

use MoonShine\Fields\Date;
use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

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

    public function rules(Model $item): array
    {
        return [];
    }

}
