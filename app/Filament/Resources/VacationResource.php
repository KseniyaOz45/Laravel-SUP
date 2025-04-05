<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VacationResource\Pages;
use App\Filament\Resources\VacationResource\RelationManagers;
use App\Models\User;
use App\Models\Vacation;
use App\Models\VacationType;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VacationResource extends Resource
{
    protected static ?string $model = Vacation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Select::make('personal_id')->options(
                    User::all()->pluck('name', 'id')
                )->required()->label('Personal'),
                Select::make('vacation_type_id')
                    ->options(VacationType::all()->pluck('name', 'id'))
                    ->required()->label('Vacation Type'),
                DateTimePicker::make('start_at')->required()->label('Start Date'),
                DateTimePicker::make('deadline')->required()->label('Deadline'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('personal.name')->label('Personal')->searchable()->sortable(),
                TextColumn::make('vacationType.name')->label('Vacation Type')->searchable()->sortable(),
                TextColumn::make('start_at')->label('Start Date')->sortable(),
                TextColumn::make('deadline')->label('End Date')->sortable(),
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
            'index' => Pages\ListVacations::route('/'),
            'create' => Pages\CreateVacation::route('/create'),
            'edit' => Pages\EditVacation::route('/{record}/edit'),
        ];
    }
}
