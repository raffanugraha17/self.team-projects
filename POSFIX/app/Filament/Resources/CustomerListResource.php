<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\CustomerList;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerListResource\Pages;
use App\Filament\Resources\CustomerListResource\RelationManagers;

class CustomerListResource extends Resource
{
    protected static ?string $model = CustomerList::class;

    protected static ?string $navigationIcon = 'heroicon-m-server-stack';
    protected static ?string $navigationGroup = "List";


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    TextInput::make('customer_name')->required(),
                    TextInput::make('customer_telephone')->type('number')
                    ->required()->maxLength(200),
                    TextInput::make('customer_age')->required()
                    ->integer(),
                    TextInput::make('customer_occupation')->required(),
                    TextInput::make('customer_address')->required(),
                    Select::make('customer_gender')->required()
                    ->options([
                        'Male'=>'Male',
                        'Female'=>'Female',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')->sortable()->searchable(),
                TextColumn::make('customer_telephone')->sortable()->searchable(),
                TextColumn::make('customer_age')->sortable()->searchable(),
                TextColumn::make('customer_occupation')->sortable()->searchable(),
                TextColumn::make('customer_address')->sortable()->searchable(),
                TextColumn::make('customer_gender')->sortable()->searchable(),
            
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomerLists::route('/'),
            // 'create' => Pages\CreateCustomerList::route('/create'),
            // 'edit' => Pages\EditCustomerList::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
   {
       return parent::getEloquentQuery()
           ->withoutGlobalScopes([
               SoftDeletingScope::class,
           ])
           ->select(['customer_id','customer_code', 'customer_name', 'customer_telephone', 'customer_age', 'customer_occupation', 'customer_address', 'customer_gender', 'flag']);
   }
}
