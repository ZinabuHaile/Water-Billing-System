<?php

namespace App\Filament\Resources\FixedrateResource\Pages;

use App\Filament\Resources\FixedrateResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFixedrate extends ViewRecord
{
    protected static string $resource = FixedrateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
