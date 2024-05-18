<?php

namespace App\Filament\Resources\JobtitleResource\Pages;

use App\Filament\Resources\JobtitleResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJobtitle extends ViewRecord
{
    protected static string $resource = JobtitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
