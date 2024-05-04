<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ChartWidgets extends ChartWidget
{
    protected static ?string $heading = 'Orders per month';
    protected static ?int $sort = 2;
    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'backgroundColor' => '#000000',
                    'borderColor' => '#000000',
                    'pointBorderColor' => '#eaeaea',
                    'pointBackgroundColor' => '#eaeaea',
                    'pointStyle' => 'circle',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}


