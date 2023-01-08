<?php

declare(strict_types = 1);

namespace App\Providers;

use App\Jaqen\Resources\UserResource;
use DigitalCreative\Jaqen\JaqenServiceProvider as BaseJaqenServiceProvider;

class JaqenServiceProvider extends BaseJaqenServiceProvider
{
    public function resources(): array
    {
        return [
            UserResource::class,
        ];
    }
}
