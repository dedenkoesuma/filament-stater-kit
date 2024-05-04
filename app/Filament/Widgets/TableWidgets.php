<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;

class TableWidgets extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?string $heading = 'Latest Orders';
    protected static ?int $sort = 3;
    public function table(Table $table): Table
    {
        return $table
            ->query(
               User::query()
            )
            ->columns([
                Tables\Columns\TextColumn::make('timestamps')
                ->label('Label'),
                Tables\Columns\TextColumn::make('email_verified_at')
                ->label('Label'),
                Tables\Columns\TextColumn::make('user_id')
                ->label('Label'),
                Tables\Columns\TextColumn::make('email_id')
                ->label('Label'),
                Tables\Columns\TextColumn::make('order')
                ->label('Label'),
                Tables\Columns\TextColumn::make('email_verified_at')
                ->label('Label'),
            ]);
    }
}
