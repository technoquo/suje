<?php

namespace App\Filament\Resources\ViolenceResource\Pages;

use App\Filament\Resources\ViolenceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListViolences extends ListRecords
{
    protected static string $resource = ViolenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
