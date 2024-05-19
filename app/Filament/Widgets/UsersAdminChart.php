<?php

namespace App\Filament\Widgets;

use App\Models\User;

use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class UsersAdminChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static string $color = 'info';

    protected function getData(): array
    {
        $data = Trend::model(User::class)
                            ->between(
                                start: now()->startOfMonth(),//startOfYear(),
                                end: now()->endOfMonth(),
        )
        ->perDay()//perMonth()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Users Created',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'line'; //bar
    }
}
