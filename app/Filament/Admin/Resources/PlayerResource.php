<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PlayerResource\Pages;
use App\Models\Player;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PlayerResource extends Resource
{
    protected static ?string $model = Player::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->directory('players-images')
                    ->visibility('public')
                    ->columnSpan('full')
                    ->image()
                    ->imageEditor()
                    ->required(),
                Forms\Components\Textarea::make('small_description')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Select::make('section')
                    ->label('Section')
                    ->required()
                    ->columnSpan('full')
                    ->native(false)
                    ->searchable()
                    ->relationship(titleAttribute: 'title'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('small_description'),
                Tables\Columns\TextColumn::make('section.title')->badge(),
                Tables\Columns\TextColumn::make('videos_count')->counts('videos')
                    ->badge(),
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
            'index' => Pages\ListPlayers::route('/'),
            'create' => Pages\CreatePlayer::route('/create'),
            'edit' => Pages\EditPlayer::route('/{record}/edit'),
        ];
    }
}
