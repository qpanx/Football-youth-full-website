<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PlayerVideoResource\Pages;
use App\Filament\Admin\Resources\PlayerVideoResource\RelationManagers;
use App\Models\PlayerVideo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlayerVideoResource extends Resource
{
    protected static ?string $model = PlayerVideo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\FileUpload::make('video')
                    ->required()
                    ->directory('players-videos')
                    ->visibility('public')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Select::make('player')
                    ->label('Player')
                    ->required()
                    ->columnSpan('full')
                    ->native(false)
                    ->searchable()
                    ->relationship(titleAttribute: 'name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('player.name')->badge(),
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
            'index' => Pages\ListPlayerVideos::route('/'),
            'create' => Pages\CreatePlayerVideo::route('/create'),
            'edit' => Pages\EditPlayerVideo::route('/{record}/edit'),
        ];
    }
}
