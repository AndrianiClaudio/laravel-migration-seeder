<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class TrainController extends Controller
{
    //
    public function index()
    {
        $today = date("Y-m-d");
        // @dd($today);
        $trains = Train
            ::where('departure_time', 'like', $today . '%')
            ->get();
        // @dd($trains);
        // dd($trains);
        return view('guest.home', [
            'documentTitle' => 'Home',
            'trains' => $trains
        ]);
    }
}
