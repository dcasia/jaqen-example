<?php

namespace App\Jaqen\Resources;

use App\Models\User;
use DigitalCreative\Jaqen\Services\Fields\Fields\TextField;
use DigitalCreative\Jaqen\Services\ResourceManager\AbstractResource;
use Illuminate\Database\Eloquent\Model;

class UserResource extends AbstractResource
{
    public function model(): Model
    {
        return new User();
    }

    public function fieldsForIndex(): array
    {
        return [
            TextField::make('Name'),
        ];
    }
}
