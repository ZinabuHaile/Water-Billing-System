<?php

namespace App\Filament\Resources\StaffResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use App\Filament\Resources\StaffResource;
use Filament\Resources\Pages\ListRecords;

class ListStaff extends ListRecords
{
    protected static string $resource = StaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
             Action::make('Only Download Pdf')
                ->icon('heroicon-o-arrow-down-on-square-stack')
                ->url(fn()=>route('staff.pdf.downloadsonly'))
                ->openUrlInNewTab(),
             Action::make('Download Pdf')
                ->icon('heroicon-o-arrow-down-on-square-stack')
                ->url(fn()=>route('staff.pdf.downloads'))
                ->openUrlInNewTab(),
          
            Actions\CreateAction::make(),
        ];
    }
}
