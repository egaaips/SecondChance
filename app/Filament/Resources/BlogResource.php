<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $label = 'Article'; // Nama tunggal
    protected static ?string $pluralLabel = 'Articles'; // Nama jamak

    protected static ?string $navigationLabel = 'Articles';
    protected static ?string $navigationGroup = 'Blog';


    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('image')
                            ->required()
                            ->image()
                            ->disk('public')
                            ->visibility('public'),
                        TextInput::make('author')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('category')
                            ->required(),
                        RichEditor::make('content')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable()->limit(30),
                Tables\Columns\ImageColumn::make('image')->disk('public')->visibility('public'),
                Tables\Columns\TextColumn::make('author')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('category')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->sortable()
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(
                    function (Collection $record) {
                       foreach ($record as $key => $value) {
                        if($value->image) {
                            Storage::disk('public')->delete($value->image);
                           } 
                       }
                    }
                ),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
