<?php

namespace App\Filament\Resources\HobbiesResource\Pages;

use App\Filament\Resources\HobbiesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHobbies extends EditRecord
{
    protected static string $resource = HobbiesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
