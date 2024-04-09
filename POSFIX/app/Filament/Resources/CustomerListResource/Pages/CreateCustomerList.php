<?php

namespace App\Filament\Resources\CustomerListResource\Pages;

use App\Filament\Resources\CustomerListResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerList extends CreateRecord
{
    protected static string $resource = CustomerListResource::class;
}
