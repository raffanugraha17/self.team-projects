<?php

namespace App\Filament\Resources\CustomerListResource\Pages;

use App\Filament\Resources\CustomerListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerLists extends ListRecords
{
    protected static string $resource = CustomerListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
