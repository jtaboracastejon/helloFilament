<?php

namespace App\Filament\Widgets;

use App\Models\Owner;
use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $owners = Owner::all();
        return [
            Stat::make('Perros', Patient::where('type', 'dog')->count())
                ->label('Conteo de perros'),
            Stat::make('Gatos', Patient::where('type', 'cat')->count()),
        ];
    }
}
