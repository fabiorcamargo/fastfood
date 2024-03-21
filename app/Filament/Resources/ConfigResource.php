<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConfigResource\Pages;
use App\Filament\Resources\ConfigResource\RelationManagers;
use App\Models\Config;
use Exception;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class ConfigResource extends Resource
{
    protected static ?string $model = Config::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';



    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\TextInput::make('body.cep')
                    ->mask('99999-999')
                    ->suffixAction(
                        fn ($state, $set) =>
                        Action::make('search-action')
                            ->icon('heroicon-o-magnifying-glass')
                            ->action(function () use ($state, $set) {
                                if (blank($state)) {
                                    Filament::notify('danger', 'Digite o CEP para buscar o endereço');
                                    return;
                                }

                                try {
                                    $cepData = Http::get("https://viacep.com.br/ws/{$state}/json/")
                                        ->throw()
                                        ->json();

                                    if (in_array('erro', $cepData)) {
                                        Notification::make()
                                            ->title('Cep não encontrado')
                                            ->danger()
                                            ->send();
                                    }
                                } catch (RequestException $e) {
                                    Notification::make()
                                        ->title('Cep não encontrado')
                                        ->danger()
                                        ->send();
                                    return;
                                }
                                // Notification::make()
                                //         ->title("Cidade " . $cepData['localidade'] . " - " . $cepData['uf'])
                                //         ->success()
                                //         ->send();

                                //dd($cepData);
                                $set('body.city', $cepData['localidade'] ?? null);
                                $set('body.uf', $cepData['uf'] ?? null);
                            })
                    ),
                    Forms\Components\TextInput::make('body.city'),
                    Forms\Components\TextInput::make('body.uf')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('body.cep')
                ->label('CEP'),
                Tables\Columns\TextColumn::make('body.city')
                ->label('Cidade'),
                Tables\Columns\TextColumn::make('body.uf')
                ->label('UF'),
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
            'index' => Pages\ListConfigs::route('/'),
            'create' => Pages\CreateConfig::route('/create'),
            'edit' => Pages\EditConfig::route('/{record}/edit'),
        ];
    }
}
