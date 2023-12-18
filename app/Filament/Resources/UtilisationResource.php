<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UtilisationResource\Pages;
use App\Filament\Resources\UtilisationResource\RelationManagers;
use App\Models\Utilisation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UtilisationResource extends Resource
{
    protected static ?string $model = Utilisation::class;

    protected static ?string $navigationLabel = 'Utilisations';

    protected static ?string $slug = 'monRemède/utilisations';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $modelLabel = 'Utilisations';

    protected static ?string $navigationGroup = 'monRemède';

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    protected static ?string $navigationParentItem = 'Plantes';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('plant_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('interne')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('externe')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('plant_id')
                    ->numeric()
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
            'index' => Pages\ListUtilisations::route('/'),
            'create' => Pages\CreateUtilisation::route('/create'),
            'edit' => Pages\EditUtilisation::route('/{record}/edit'),
        ];
    }
}
