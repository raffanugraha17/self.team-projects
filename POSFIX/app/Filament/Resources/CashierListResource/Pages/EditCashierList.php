<?php

namespace App\Filament\Resources\CashierListResource\Pages;

use App\Filament\Resources\CashierListResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCashierList extends EditRecord
{
    protected static string $resource = CashierListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
