<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Donasi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Faker\Provider\ar_EG\Text;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DonasiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DonasiResource\RelationManagers;
use Filament\Forms\Components\Section;
use Filament\Tables\Filters\SelectFilter;

use function Laravel\Prompts\form;

class DonasiResource extends Resource
{
    protected static ?string $model = Donasi::class;

    protected static ?string $navigationLabel = 'Donations';
    protected static ?string $navigationGroup = 'Donation';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('nama')->required(),
                        TextInput::make('alamat')->required(),
                        TextInput::make('nomor_hp')->required(),
                        TextInput::make('berat')->required(),
                        Select::make('pilihan_pengiriman')->options([
                            'Drop Point' => 'Drop Point',
                            'Pick Up' => 'Pick Up',
                        ])->required(),
                        Select::make('status')->options([
                            'Pending' => 'Pending',
                            'Process' => 'Process',
                            'Pick up' => 'Pick up',
                            'Completed' => 'Completed',
                        ])

                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('alamat'),
                TextColumn::make('nomor_hp'),
                TextColumn::make('berat'),
                TextColumn::make('pilihan_pengiriman')->label('Pengiriman'),
                TextColumn::make('created_at')->label('Tanggal')->date()->sortable(),
                TextColumn::make('status'),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Process' => 'Process',
                        'Pick up' => 'Pick up',
                        'Completed' => 'Completed',
                    ])
                    ->label('Status')

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListDonasis::route('/'),
            'create' => Pages\CreateDonasi::route('/create'),
            'edit' => Pages\EditDonasi::route('/{record}/edit'),
        ];
    }
}
