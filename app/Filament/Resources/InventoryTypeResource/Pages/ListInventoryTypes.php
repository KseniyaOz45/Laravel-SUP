<?php

namespace App\Filament\Resources\InventoryTypeResource\Pages;

use App\Filament\Resources\InventoryTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInventoryTypes extends ListRecords
{
    protected static string $resource = InventoryTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
