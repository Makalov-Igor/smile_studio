<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

use MoonShine\Enums\ClickAction;
use MoonShine\Fields\Date;
use MoonShine\Fields\DateRange;
use MoonShine\Fields\Text;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;

/**
 * @extends ModelResource<Review>
 */
class ReviewResource extends ModelResource
{
    protected string
        $model = Review::class,
        $title = 'Reviews',
        $sortColumn = 'updated_at',
        $sortDirection = 'desc';

    protected bool
        $createInModal = true,
        $editInModal = true,
        $detailInModal = true,
        $isAsync = true;

    public function __construct()
    {
        $this->title = __('moonshine::ui.resource.reviews.title');
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
                Text::make(__('moonshine::ui.resource.reviews.fullname'), 'fullname')
                    ->sortable(),
                Text::make(__('moonshine::ui.resource.reviews.message'), 'message')
                    ->sortable(),
                Date::make(__('moonshine::ui.resource.reviews.created_at'), 'created_at')
                    ->sortable()
                    ->format('d.m.Y H:i:s')
                    ->withTime(),
                Date::make(__('moonshine::ui.resource.reviews.updated_at'), 'updated_at')
                    ->sortable()
                    ->format('d.m.Y H:i:s')
                    ->withTime()
            ]),
        ];
    }

    public function filters(): array
    {
        return [
            Text::make(__('moonshine::ui.resource.reviews.fullname'), 'fullname'),
            Text::make(__('moonshine::ui.resource.reviews.message'), 'message'),
            DateRange::make(__('moonshine::ui.resource.reviews.created_at'), 'created_at'),
            DateRange::make(__('moonshine::ui.resource.reviews.updated_at'), 'updated_at')
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
