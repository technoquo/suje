<?php

namespace App\Filament\Resources\ViolenceResource\Pages;

use App\Filament\Resources\ViolenceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditViolence extends EditRecord
{
    protected static string $resource = ViolenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
