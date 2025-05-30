<?php

namespace App\Filament\Resources\EmailLogResource\Pages;

use App\Filament\Resources\EmailLogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmailLogs extends ListRecords
{
    protected static string $resource = EmailLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
