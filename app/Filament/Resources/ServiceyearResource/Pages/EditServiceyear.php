<?php

namespace App\Filament\Resources\ServiceyearResource\Pages;

use App\Filament\Resources\ServiceyearResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceyear extends EditRecord
{
    protected static string $resource = ServiceyearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
