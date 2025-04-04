<?php

namespace App\Filament\Resources\InventoryTypeResource\Pages;

use App\Filament\Resources\InventoryTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInventoryType extends EditRecord
{
    protected static string $resource = InventoryTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
