<?php

namespace App\Filament\Admin\Resources\PasiendcmResource\Pages;

use App\Filament\Admin\Resources\PasiendcmResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPasiendcm extends EditRecord
{
    protected static string $resource = PasiendcmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
