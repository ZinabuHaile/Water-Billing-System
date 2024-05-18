<?php

namespace App\Filament\Resources\FixedrateResource\Pages;

use App\Filament\Resources\FixedrateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFixedrate extends EditRecord
{
    protected static string $resource = FixedrateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
