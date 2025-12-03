<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClienteResource\Pages;
use App\Filament\Resources\ClienteResource\RelationManagers;
use App\Models\Cliente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClienteResource extends Resource
{
    protected static ?string $model = Cliente::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombres')
                    ->required()
                    ->maxLength(25),
                Forms\Components\TextInput::make('apellido_paterno')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('apellido_materno')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->required()
                    ->maxLength(8),
                Forms\Components\DatePicker::make('nacimiento')
                    ->required(),
                Forms\Components\TextInput::make('direccion')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Select::make('genero')
                    ->options([
                        'Masculino' => 'Masculino',
                        'Femenino' => 'Femenino',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombres')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido_paterno')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido_materno')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nacimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('direccion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('genero')
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
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('whatsapp')
                    ->label('WhatsApp')
                    ->icon('heroicon-o-chat-bubble-left-ellipsis')
                    ->button()
                    ->color(fn($record) => match(true) {
                        !$record->proximo_recordatorio => 'secondary', // gris
                        (\Carbon\Carbon::parse($record->proximo_recordatorio->fecha)->isToday()) => 'danger', // rojo
                        (\Carbon\Carbon::parse($record->proximo_recordatorio->fecha)->diffInDays(now()) <= 1) => 'warning', // amarillo
                        (\Carbon\Carbon::parse($record->proximo_recordatorio->fecha)->diffInDays(now()) <= 3) => 'warning', // amarillo
                        default => 'success', // verde
                    })
                    ->url(fn($record) => $record->proximo_recordatorio
                        ? 'https://wa.me/591' . $record->telefono . '?text=Recordatorio%20de%20cita%20para%20' . urlencode($record->nombres) . '%20el%20' . $record->proximo_recordatorio->fecha . '%3A%20' . urlencode($record->proximo_recordatorio->mensaje)
                        : null)
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
            'index' => Pages\ListClientes::route('/'),
            'create' => Pages\CreateCliente::route('/create'),
            'edit' => Pages\EditCliente::route('/{record}/edit'),
        ];
    }
}
