<?php

namespace App\Filament\Resources\MetercategoryResource\Pages;

use App\Filament\Resources\MetercategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetercategory extends EditRecord
{
    protected static string $resource = MetercategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
