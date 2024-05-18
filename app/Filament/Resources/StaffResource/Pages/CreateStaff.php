<?php

namespace App\Filament\Resources\StaffResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use App\Filament\Resources\StaffResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStaff extends CreateRecord
{
    protected static string $resource = StaffResource::class;
    

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Staff registered')
            ->body('The staff has been created successfully.');
   }

   protected function getRedirectUrl() : String {
      return $this->getResource()::getUrl('index');
   }

   
}
