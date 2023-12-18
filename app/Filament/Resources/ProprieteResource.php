<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProprieteResource\Pages;
use App\Filament\Resources\ProprieteResource\RelationManagers;
use App\Models\Propriete;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProprieteResource extends Resource
{
    protected static ?string $model = Propriete::class;

    protected static ?string $navigationLabel = 'Propriétés';

    protected static ?string $slug = 'monRemède/proprietes';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $modelLabel = 'Propriétés';

    protected static ?string $navigationGroup = 'monRemède';

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('plant_id')
                    ->required()
                    ->numeric(),
                Forms\Components\RichEditor::make('propriete')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('plant.name')
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
            'index' => Pages\ListProprietes::route('/'),
            'create' => Pages\CreatePropriete::route('/create'),
            'edit' => Pages\EditPropriete::route('/{record}/edit'),
        ];
    }
}
