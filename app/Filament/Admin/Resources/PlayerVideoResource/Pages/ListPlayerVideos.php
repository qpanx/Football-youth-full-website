<?php

namespace App\Filament\Admin\Resources\PlayerVideoResource\Pages;

use App\Filament\Admin\Resources\PlayerVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlayerVideos extends ListRecords
{
    protected static string $resource = PlayerVideoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
