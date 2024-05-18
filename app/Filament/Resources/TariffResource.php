<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TariffResource\Pages;
use App\Filament\Resources\TariffResource\RelationManagers;
use App\Models\Tariff;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TariffResource extends Resource
{
    protected static ?string $model = Tariff::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Tariff Settings';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('metercategory_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('minrange')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('maxrange')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('payrate')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('effectiveyear')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('metercategory_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('minrange')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('maxrange')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payrate')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('effectiveyear')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTariffs::route('/'),
            'create' => Pages\CreateTariff::route('/create'),
            'view' => Pages\ViewTariff::route('/{record}'),
            'edit' => Pages\EditTariff::route('/{record}/edit'),
        ];
    }
}
