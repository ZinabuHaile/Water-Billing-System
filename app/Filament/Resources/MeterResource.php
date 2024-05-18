<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MeterResource\Pages;
use App\Filament\Resources\MeterResource\RelationManagers;
use App\Models\Meter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MeterResource extends Resource
{
    protected static ?string $model = Meter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('customer_id')
                      ->relationship(name:'customer',titleAttribute:'firstname')
                      ->searchable()
                      ->preload()
                      ->required(), 
                Forms\Components\Select::make('metercategory_id')
                      ->relationship(name:'metercategory',titleAttribute:'name')
                      ->searchable()
                      ->preload()
                      ->required(),                  
                Forms\Components\TextInput::make('serialnumber')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kebelle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ketena')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('installeddate')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('metercategory_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('serialnumber')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kebelle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ketena')
                    ->searchable(),
                Tables\Columns\TextColumn::make('installeddate')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListMeters::route('/'),
            'create' => Pages\CreateMeter::route('/create'),
            'view' => Pages\ViewMeter::route('/{record}'),
            'edit' => Pages\EditMeter::route('/{record}/edit'),
        ];
    }
}
