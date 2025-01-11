<?php

namespace App\Filament\Resources\DepartmentResource\Pages;

use App\Filament\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;

    // Redirect to the index page after creating a new department inside the admin
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
