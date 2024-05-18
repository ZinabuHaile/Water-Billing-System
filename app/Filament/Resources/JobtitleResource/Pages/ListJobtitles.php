<?php

namespace App\Filament\Resources\JobtitleResource\Pages;

use App\Filament\Resources\JobtitleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJobtitles extends ListRecords
{
    protected static string $resource = JobtitleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
