<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

/**
 * Class Report
 *
 * @property int $id
 * @property string|null $name
 * @property Carbon|null $date
 * @property int|null $affiliate_id
 * @property int|null $partner_id
 * @property int|null $advertiser_id
 * @property int|null $lead_id
 * @property int|null $esp_id
 *
 * @package App\Models
 */

class Report extends Model
{
	protected $table = 'reports';
	public $timestamps = false;

	protected $casts = [
		'affiliate_id' => 'int',
		'partner_id' => 'int',
		'advertiser_id' => 'int',
		'lead_id' => 'int',
		'esp_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'name',
		'date',
		'affiliate_id',
		'partner_id',
		'advertiser_id',
		'lead_id',
		'esp_id'
	];

    public function runClone()
    {
        ini_set('max_execution_time', 120);

        $valIdCache = Cache::get( 'idIncrement' ) ?? 0;

        $limit = 10000;
        $fecha = '2022-01-07';
        $id    = $valIdCache;

        $response = DB::table('reports')
            ->where('id', '>', $id)
            ->limit($limit)
            ->get()
            ->toArray();

        $dataMassive = [];

        $chunky = array_chunk($response, 1000);

        foreach ( $chunky as $key => $datas ) {

            foreach ($datas as $sey => $data) {

                $dataMassive[$sey] = [
                    'date'          => $fecha,
                    'name'          => $data->name,
                    'affiliate_id'  => $data->affiliate_id,
                    'partner_id'    => $data->partner_id,
                    'advertiser_id' => $data->advertiser_id,
                    'lead_id'       => $data->lead_id,
                    'esp_id'        => $data->esp_id
                ];

                $id++;

            }

            DB::table('reports')->insert( $dataMassive );
        }

        Cache::forget('idIncrement');

        Cache::put('idIncrement', $id);

    }

    public function viewWelcome()
    {
        $date  = '2022-01-04';

        $limit = 12000;

        $response = DB::table('reports')
            ->select('reports.id as id', 'reports.name as name', 'reports.date as date', 'advertisers.name as advertiser', 'affiliates.name as affiliate', 'esps.name as esp', 'leads.name as lead', 'partners.name as partner')
            ->join('advertisers', 'reports.advertiser_id', '=', 'advertisers.id')
            ->join('affiliates', 'reports.affiliate_id', '=', 'affiliates.id')
            ->join('esps', 'reports.esp_id', '=', 'esps.id')
            ->join('leads', 'reports.lead_id', '=', 'leads.id')
            ->join('partners', 'reports.partner_id', '=', 'partners.id')
            ->where('reports.date', $date)
            ->limit($limit)
            ->get();

        return $response;
    }


}
