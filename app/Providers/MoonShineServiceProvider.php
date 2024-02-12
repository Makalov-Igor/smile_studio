<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\EmployeeResource;
use App\MoonShine\Resources\RequestResource;
use App\MoonShine\Resources\ReviewResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [];
    }

    protected function pages(): array
    {
        return [];
    }

    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.admins_title'),
                   new MoonShineUserResource()
               ),
               MenuItem::make(
                   static fn() => __('moonshine::ui.resource.role_title'),
                   new MoonShineUserRoleResource()
               ),
            ]),
            MenuItem::make(
                static fn() => __('moonshine::ui.resource.employees.title'),
                new EmployeeResource()
            ),
            MenuItem::make(
                static fn() => __('moonshine::ui.resource.reviews.title'),
                new ReviewResource()
            ),
            MenuItem::make(
                static fn() => __('moonshine::ui.resource.request.title'),
                new RequestResource()
            ),
        ];
    }

    /**
     * @return array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
