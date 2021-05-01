<?php
namespace App\Traits;

use Carbon\Carbon;

trait schedule
{
    public static function schedule()
    {
        $date = Carbon::now();
        return $date->calendar();
    }
}
