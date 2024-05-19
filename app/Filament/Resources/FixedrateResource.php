<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FixedrateResource\Pages;
use App\Filament\Resources\FixedrateResource\RelationManagers;
use App\Models\Fixedrate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FixedrateResource extends Resource
{
    protected static ?string $model = Fixedrate::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Fixed Rates';

    protected static ?string $navigationGroup = 'System Settings';

    protected static ?int $navigationSort = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('metercategory_id')
                //     ->required()
                //     ->numeric(),
                Forms\Components\Select::make('metercategory_id')
                        ->relationship(name:'metcategory',titleAttribute:'name')
                        ->searchable()
                        ->preload()
                        ->required(),                     
                Forms\Components\TextInput::make('chargeamount')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                // Forms\Components\TextInput::make('effectiveyear')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\Select::make('serviceyear_id')
                        ->relationship(name:'serviceyr',titleAttribute:'servyear')
                        ->searchable()
                        ->preload()
                        ->required(),                   
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('metercategory_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('chargeamount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('serviceyr.servyear')
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
            'index' => Pages\ListFixedrates::route('/'),
            'create' => Pages\CreateFixedrate::route('/create'),
            'view' => Pages\ViewFixedrate::route('/{record}'),
            'edit' => Pages\EditFixedrate::route('/{record}/edit'),
        ];
    }
}
