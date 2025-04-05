<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Client;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('batch_number')->required(),

                Select::make('client_id')
                    ->options(
                        Client::all()->pluck('name', 'id')
                    )->required()->label('Client'),

                Select::make('personal_id')->options(
                    User::all()->pluck('name', 'id')
                )->required()->label('Personal'),

                Select::make('status_id')->options(
                    OrderStatus::all()->pluck('name', 'id')
                )->required()->label('Status'),

                Select::make('inventory_id')->options(
                    Inventory::all()->pluck('name', 'id')
                )->required()->label('Inventory'),

                TextInput::make('quantity')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('batch_number')->label('Batch Number')->searchable(),
                TextColumn::make('client.name')->label('Client')->searchable()->sortable(),
                TextColumn::make('personal.name')->label('Personal')->searchable()->sortable(),
                TextColumn::make('status.name')->label('Status')->searchable()->sortable(),
                TextColumn::make('inventory.name')->label('Inventory')->searchable()->sortable(),
                TextColumn::make('quantity')->label('Quantity')->sortable(),
                TextColumn::make('sum')->label('Total')->sortable(),
                TextColumn::make('created_at')->label('Created At'),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
