<?php

namespace App\Livewire\Roles\Owner\Pages\Dashboard\OwnerDashboard\DashboardOwnerComponents;
use Livewire\Component;

use ArielMejiaDev\LarapexCharts\LarapexChart;
class Chart extends Component
{
    public $chartData = [];



    public function render()
    {
        return view('livewire.roles.owner.pages.dashboard.owner-dashboard.dashboard-owner-components.chart');
    }
}
