<?php

namespace App\Filament\Resources\InformationResource\Pages;

use App\Filament\Resources\InformationResource;
use App\Models\Information;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditInformation extends EditRecord
{
    protected static string $resource = InformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Information $record){
                   if($record->image) {
                    Storage::disk('public')->delete($record->image);
                   } 
                }
            ),
        ];
    }
}
