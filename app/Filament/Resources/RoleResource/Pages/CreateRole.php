<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;
    protected function getRedirectUrl(): string 
    { 
      return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Role Created';
    //      return Notification::make()
    //           ->success()
    //           ->title('Role Created')
    //           ->body('The role has been created successfully.');
    
    }
}
