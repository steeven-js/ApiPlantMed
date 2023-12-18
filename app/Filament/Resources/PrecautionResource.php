<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrecautionResource\Pages;
use App\Filament\Resources\PrecautionResource\RelationManagers;
use App\Models\Precaution;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrecautionResource extends Resource
{
    protected static ?string $model = Precaution::class;

    protected static ?string $navigationLabel = 'Précautions';

    protected static ?string $slug = 'monRemède/précautions';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $modelLabel = 'Précautions';

    protected static ?string $navigationGroup = 'monRemède';

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('plant_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('precaution')
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
            'index' => Pages\ListPrecautions::route('/'),
            'create' => Pages\CreatePrecaution::route('/create'),
            'edit' => Pages\EditPrecaution::route('/{record}/edit'),
        ];
    }
}
