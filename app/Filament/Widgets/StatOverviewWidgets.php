<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatOverviewWidgets extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [  
        Stat::make('Revenue', 'Rp132.1k')
            ->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        Stat::make('New customers', '1232')
            ->description('3% decrease')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->chart([17, 4, 15, 3, 10, 2, 7])
            ->color('danger'),
        Stat::make('New orders', '4523')
            ->description('7% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 20, 3, 15, 4, 17])
            ->color('success'),
        ];
    }
}
