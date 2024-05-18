<?php

namespace App\Filament\Resources\ServiceyearResource\Pages;

use App\Filament\Resources\ServiceyearResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServiceyears extends ListRecords
{
    protected static string $resource = ServiceyearResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
