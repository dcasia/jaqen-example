<?php

declare(strict_types = 1);

namespace App\Providers;

use App\Jaqen\Resources\ArticleResource;
use App\Jaqen\Resources\UserResource;
use DigitalCreative\Jaqen\JaqenServiceProvider as BaseJaqenServiceProvider;
use DigitalCreative\Jaqen\Services\Scaffold\ResourceLink;
use DigitalCreative\Jaqen\Services\Scaffold\Sidebar;

class JaqenServiceProvider extends BaseJaqenServiceProvider
{

    public function scaffold(): Sidebar
    {
        return Sidebar::make([

            ResourceLink::make('Home', UserResource::class)->icon('home')->topLevel()
                        ->addSubmenu('Items with icon', [
                            ResourceLink::make('Users', UserResource::class)->icon('home'),
                        ]),

            ResourceLink::make('Article', ArticleResource::class)->icon('bookOne')

        ]);
    }

    public function resources(): array
    {
        return [
            new UserResource(),
        ];
    }

}
