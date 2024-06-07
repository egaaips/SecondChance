<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use App\Models\Blog;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Blog $record){
                   if($record->image) {
                    Storage::disk('public')->delete($record->image);
                   } 
                }
            ),
        ];
    }
}
