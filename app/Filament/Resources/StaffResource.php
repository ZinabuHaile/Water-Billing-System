<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Staff;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;

use Filament\Forms\Components\Card;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\StaffResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StaffResource\RelationManagers;

class StaffResource extends Resource
{
    protected static ?string $model = Staff::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $modelLable = 'Staff Detail';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            

                Card::make()->schema([


          
                    
                
   
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    // Forms\Components\TextInput::make('lastname')
                    //     ->required()
                    //     ->maxLength(255),
                    Forms\Components\TextInput::make('phone')
                        ->tel()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->email()
                        ->required()
                        ->maxLength(255),



                    Forms\Components\Select::make('jobtitle_id')
                        ->relationship(name:'jobtitle',titleAttribute:'name')
                        // ->searchable()
                        // ->preload()
                        ->required(), 


                        
                    Forms\Components\Select::make('company_id')
                        ->relationship(name:'company',titleAttribute:'name')
                        // ->searchable()
                        // ->preload()
                        ->required()
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('jobtitle_id')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('company_id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
              
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jobtitle.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
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
                 Action::make('Download')
                ->icon('heroicon-o-arrow-down-on-square-stack')
                ->url(fn(Staff $record)=>route('staff.pdf.download',$record))
                ->openUrlInNewTab(),
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
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'view' => Pages\ViewStaff::route('/{record}'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
        ];
    }
}
