<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Cards\Help;
use Findex\Calendar\Calendar;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            //new Help,
            new Calendar()
        ];
    }
}