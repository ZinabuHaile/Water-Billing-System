<?php

namespace App\Filament\Resources\MetercategoryResource\Pages;

use App\Filament\Resources\MetercategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMetercategory extends ViewRecord
{
    protected static string $resource = MetercategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
