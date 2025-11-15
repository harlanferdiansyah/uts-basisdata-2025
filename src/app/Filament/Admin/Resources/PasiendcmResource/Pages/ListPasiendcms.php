<?php

namespace App\Filament\Admin\Resources\PasiendcmResource\Pages;

use App\Filament\Admin\Resources\PasiendcmResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPasiendcms extends ListRecords
{
    protected static string $resource = PasiendcmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
