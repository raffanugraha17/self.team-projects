<?php

namespace App\Filament\Resources\CashierListResource\Pages;

use App\Filament\Resources\CashierListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCashierLists extends ListRecords
{
    protected static string $resource = CashierListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
