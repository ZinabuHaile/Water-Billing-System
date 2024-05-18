<?php

namespace App\Filament\Resources\FixedrateResource\Pages;

use App\Filament\Resources\FixedrateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFixedrates extends ListRecords
{
    protected static string $resource = FixedrateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
