<?php

namespace App\Jaqen\Resources;

use App\Jaqen\Filters\GenderFilter;
use App\Models\User;
use DigitalCreative\Jaqen\Services\Fields\EditableField;
use DigitalCreative\Jaqen\Services\Fields\PasswordField;
use DigitalCreative\Jaqen\Services\Fields\TextField;
use DigitalCreative\Jaqen\Services\ResourceManager\AbstractResource;
use Illuminate\Database\Eloquent\Model;

class UserResource extends AbstractResource
{
    public function model(): Model
    {
        return new User();
    }

    public function filters(): array
    {
        return [
            GenderFilter::make()
        ];
    }

    public function fieldsForIndexListing(): array
    {
        return [
            TextField::make('Name'),
            TextField::make('Email'),
            TextField::make('Gender'),
        ];
    }

    public function fieldsForCreation(): array
    {
        return [
            EditableField::make('Name'),
            EditableField::make('Email')->rules(fn() => [ 'required', 'email' ]),
            PasswordField::make('Password'),
        ];
    }

    public function fieldsForDetail(): array
    {
        return [
            TextField::make('Id'),
            TextField::make('Name'),
            TextField::make('Email'),
        ];
    }

}
