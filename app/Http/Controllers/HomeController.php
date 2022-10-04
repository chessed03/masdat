<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Models\Advertiser;
use App\Models\Affiliate;
use App\Models\Partner;
use App\Models\Report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index( Request $request )
    {
        $affiliates  = Affiliate::all();

        $partners    = Partner::all();

        $advertisers = Advertiser::all();

        $data = Report::viewWelcome( $request );

        return view('welcome', [
            'data'        => $data,
            'affiliates'  => $affiliates,
            'partners'    => $partners,
            'advertisers' => $advertisers
        ]);
    }

    public function pusher( Request $request )
    {
        $message = "Hola";

        $attemps = [1,2,3];

        foreach ( $attemps as $attemp) {
            sleep(5);
            event( new MyEvent($message) );
        }



        return view('pusher');

    }

}
