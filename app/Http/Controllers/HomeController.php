<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index( Request $request )
    {

        $data = Report::viewWelcome( $request->date );

        return view('welcome', [
            'data' => $data
        ]);
    }

}
