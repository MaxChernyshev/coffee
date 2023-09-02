<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MachineTypeResource\Pages;
use App\Filament\Resources\MachineTypeResource\RelationManagers;
use App\Models\MachineType;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MachineTypeResource extends Resource
{
    protected static ?string $model = MachineType::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('type')
                    ->required()
                    ->autofocus()
                    ->unique(ignoreRecord: true)
                    ->placeholder('new Type'),

                Textarea::make('description')
                    ->required()
                    ->unique()
                    ->autofocus()
                    ->rows(10)
                    ->placeholder('enter description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->sortable()
                    ->searchable()
                    ->limit(99),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListMachineTypes::route('/'),
            'create' => Pages\CreateMachineType::route('/create'),
            'edit' => Pages\EditMachineType::route('/{record}/edit'),
        ];
    }
}
