<?php

namespace App\Filament\Resources\JobtitleResource\Pages;

use App\Filament\Resources\JobtitleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJobtitle extends EditRecord
{
    protected static string $resource = JobtitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
