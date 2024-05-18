<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Reading;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ReadingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ReadingResource\RelationManagers;

class ReadingResource extends Resource
{
    protected static ?string $model = Reading::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()->schema([              
                    Forms\Components\TextInput::make('user_id')
                        ->required()
                        ->numeric(),
                    Forms\Components\TextInput::make('meter_id')
                        ->required()
                        ->numeric(),
                    Forms\Components\TextInput::make('previousreading')
                        ->required()
                        ->minValue(0)
                        ->numeric(),
                    Forms\Components\TextInput::make('currentreading')
                        ->required()
                        ->minValue(0)
                        ->numeric(),
                    Forms\Components\Select::make('readmonth')
                        ->options([
                              'September'=>'September',
                              'October'=>'October',
                              'November'=>'November',
                              'December'=>'December',
                              'January'=>'January',
                              'February'=>'February',
                              'March'=>'March',
                              'April'=>'April',
                              'May'=>'May',
                              'June'=>'June',
                              'July'=>'July',
                              'August'=>'August'
                         ])
                        ->required()
                        ->searchable()
                        ->preload(),
                    Forms\Components\TextInput::make('readyear')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('readdate')
                        ->required(),
               ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('meter_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('previousreading')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('currentreading')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('readmonth')
                    ->searchable(),
                Tables\Columns\TextColumn::make('readyear')
                    ->searchable(),
                Tables\Columns\TextColumn::make('readdate')
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
            'index' => Pages\ListReadings::route('/'),
            'create' => Pages\CreateReading::route('/create'),
            'view' => Pages\ViewReading::route('/{record}'),
            'edit' => Pages\EditReading::route('/{record}/edit'),
        ];
    }
}
