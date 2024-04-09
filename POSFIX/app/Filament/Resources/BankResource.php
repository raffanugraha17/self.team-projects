<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Bank;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ActivityLog;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BankResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BankResource\RelationManagers;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\ActivityLogResource;

class BankResource extends Resource
{
    protected static ?string $model = Bank::class;
    protected static ?string $navigationIcon = 'heroicon-s-banknotes';
    protected static ?string $navigationGroup = "Setting & configurations";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bank_name')
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('bank_account')
                    ->required()
                    ->integer()
                    ->maxLength(200),
                Forms\Components\TextInput::make('bank_branch')
                    ->required()
                    ->maxLength(10),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bank_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('bank_account')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('bank_branch')->sortable()->searchable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Add relations here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBanks::route('/'),
            // 'create' => Pages\CreateBank::route('/create'),
            // 'edit' => Pages\EditBank::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ])
            ->select(['bank_id', 'bank_code', 'bank_name', 'bank_account', 'bank_branch', 'flag']);
    }

    public static function afterCreate($data, $record)
    {
        $userId = Auth::id();
        $activityLog = ActivityLog::create([
            'user_id' => $userId,
            'activity' => 'create',
            'module' => 'Bank',
            'table' => 'banks',
            'record_id' => $record->id,
        ]);

        ActivityLogResource::getRecordTitle($activityLog);
    }

    public static function afterUpdate($data, $record)
    {
        $userId = Auth::id();
        $activityLog = ActivityLog::create([
            'user_id' => $userId,
            'activity' => 'update',
            'module' => 'Bank',
            'table' => 'banks',
            'record_id' => $record->id,
        ]);

        ActivityLogResource::getRecordTitle($activityLog);
    }

    public static function afterDelete($record)
    {
        $userId = Auth::id();
        $activityLog = ActivityLog::create([
            'user_id' => $userId,
            'activity' => 'delete',
            'module' => 'Bank',
            'table' => 'banks',
            'record_id' => $record->id,
        ]);

        ActivityLogResource::getRecordTitle($activityLog);
    }
}