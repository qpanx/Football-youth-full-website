<?php

namespace App\Filament\Admin\Resources\PlayerVideoResource\Pages;

use App\Filament\Admin\Resources\PlayerVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlayerVideo extends EditRecord
{
    protected static string $resource = PlayerVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
