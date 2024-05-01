<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image as ImageManager;
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
                    ->dir('images/team/')
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

        $data = [
            'updated_at' => Carbon::now()
        ];

        if($item->image){
            $image = $this->convertImageToWebp($item);
            $data['image'] = $image;
        }

        $item->update($data);
        return $item;
    }

    private function convertImageToWebp(Model $item): ?string
    {
        $originalFile = Storage::path('/public/' . $item->image);

        $image = ImageManager::read($originalFile);

        if ($image->width() !== 663 || $image->height() !== 994 || !str_contains($item->image, '.webp')) {

            $image->scale(width: 663, height: 994);

            $fileName = Str::random(15) . '.webp';
            $path = '/public/images/team/' . $fileName;

            $image->toWebp()->save(Storage::path($path));

            File::delete($originalFile);

            return 'images/team/' . $fileName;
        }

        return null;
    }

    protected function afterCreated(Model $item): Model
    {
        $data = [
            'updated_at' => Carbon::now()
        ];

        if($item->image){
            $image = $this->convertImageToWebp($item);
            $data['image'] = $image;
        }

        $item->update($data);

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
