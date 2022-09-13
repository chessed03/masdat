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

    public function test_load_data()
    {
        $comando = 'mysql -u admin -p Lms101!#$ masdat < C:\Users\52961\Downloads\archivo.sql';

        $ultima_linea = system($comando, $retornoCompleto);

        dd( $ultima_linea, $retornoCompleto );
    }

    public function test_filters_report()
    {

        ini_set('max_execution_time', 1200);

        $date = '2022-01-01';

        $affiliate_id = 2;

        $limit = 1;

        $dataInfo = DB::table('reports')
            ->select('reports.*')
            ->where('reports.date', $date)
            ->orderBy('reports.id', 'DESC')
            ->paginate(10);
//            ->select('reports.id as id', 'reports.name as name', 'reports.date as date', 'advertisers.name as advertiser', 'affiliates.name as affiliate', 'esps.name as esp', 'leads.email as lead', 'partners.name as partner')
//                ->join('advertisers', 'reports.advertiser_id', '=', 'advertisers.id')
//                ->join('affiliates', 'reports.affiliate_id', '=', 'affiliates.id')
//                ->join('esps', 'reports.esp_id', '=', 'esps.id')
//                ->join('leads', 'reports.lead_id', '=', 'leads.id')
//                ->join('partners', 'reports.partner_id', '=', 'partners.id')
//            ->where('reports.date', $date)
//            //->where('reports.affiliate_id', $affiliate_id)
//            /*->where('reports.partner_id', $partner_id)
//            ->where('reports.advertiser_id', $advertiser_id)*/
//            ->orderBy('id', 'DESC')
//            ->limit($limit)
//            ->paginate(10);

            dd($dataInfo);

    }

}
