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
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;

/**
 * @extends ModelResource<Employee>
 */
class EmployeeResource extends ModelResource
{
    protected string $model = Employee::class;

    protected string $title = 'Employees';

    public function __construct()
    {
        $this->title = __('moonshine::ui.resource.employees.title');
    }

    public function fields(): array
    {
        return [
            Block::make([
                Text::make(__('moonshine::ui.resource.employees.fullname'), 'fullname')->sortable(),
                Text::make(__('moonshine::ui.resource.employees.position'), 'position')->sortable(),
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
