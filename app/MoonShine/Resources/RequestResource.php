<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Request;

use MoonShine\Fields\Date;
use MoonShine\Fields\DateRange;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;

/**
 * @extends ModelResource<Request>
 */
class RequestResource extends ModelResource
{
    protected string
        $model = Request::class,
        $title = 'Requests',
        $sortColumn = 'updated_at',
        $sortDirection = 'desc';

    protected bool
        $createInModal = true,
        $editInModal = true,
        $detailInModal = true,
        $isAsync = true;

    public function __construct()
    {
        $this->title = __('moonshine::ui.resource.request.title');
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
                Block::make([
                    Text::make(__('moonshine::ui.resource.request.firstname'), 'firstname')
                        ->sortable()
                        ->required(),
                    Text::make(__('moonshine::ui.resource.request.lastname'), 'lastname')
                        ->sortable(),
                    Text::make(__('moonshine::ui.resource.request.message'), 'message')
                        ->sortable(),
                    Text::make(__('moonshine::ui.resource.request.phone'), 'phone')
                        ->sortable()
                        ->mask('+7(999)999-99-99'),
                    Text::make(__('moonshine::ui.resource.request.email'), 'email')
                        ->sortable(),
                    Text::make(__('moonshine::ui.resource.request.source'), 'source')
                        ->sortable(),
                    Date::make(__('moonshine::ui.resource.request.created_at'), 'created_at')
                        ->sortable()
                        ->format('d.m.Y H:i:s')
                        ->withTime(),
                    Date::make(__('moonshine::ui.resource.request.updated_at'), 'updated_at')
                        ->sortable()
                        ->format('d.m.Y H:i:s')
                        ->withTime(),
                ]),
            ]),
        ];
    }

    public function filters(): array
    {
        return [
            Text::make(__('moonshine::ui.resource.request.firstname'), 'firstname'),
            Text::make(__('moonshine::ui.resource.request.lastname'), 'lastname'),
            Text::make(__('moonshine::ui.resource.request.message'), 'message'),
            Text::make(__('moonshine::ui.resource.request.phone'), 'phone')
                ->mask('+7(999)999-99-99'),
            Text::make(__('moonshine::ui.resource.request.email'), 'email'),
            Text::make(__('moonshine::ui.resource.request.source'), 'source'),
            DateRange::make(__('moonshine::ui.resource.request.created_at'), 'created_at'),
            DateRange::make(__('moonshine::ui.resource.request.updated_at'), 'updated_at')
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
}
