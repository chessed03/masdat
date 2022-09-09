<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ReportTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_sum_monthly()
    {
        $date = '2022-01-04';

        $dateStart         = Carbon::createFromDate($date)->firstOfMonth()->format('Y-m-d');
        $dateEnd           = Carbon::createFromDate($date)->lastOfMonth()->format('Y-m-d');

        $countsMonthlyInfo = DB::table('reports')
            ->selectRaw('SUM(clicks) AS clicks')
            ->selectRaw('SUM(spams) AS spams')
            ->selectRaw('SUM(convertions) AS convertions')
            ->whereBetween('date', [ $dateStart, $dateEnd ])
            ->first();

        dd($countsMonthlyInfo);
    }

    public function test_sum_quarterly()
    {
        $date = '2022-01-04';

        $dateStart         = Carbon::createFromDate($date)->firstOfMonth()->format('Y-m-d');
        $dateEndThirdMonth = Carbon::createFromDate($dateStart)->addMonths(3)->subDay()->format('Y-m-d');

        $countsQuarterlyInfo = DB::table('reports')
            ->selectRaw('SUM(clicks) AS clicks')
            ->selectRaw('SUM(spams) AS spams')
            ->selectRaw('SUM(convertions) AS convertions')
            ->whereBetween('date', [ $dateStart, $dateEndThirdMonth ])
            ->first();

        dd($countsQuarterlyInfo);
    }

}
