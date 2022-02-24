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
        // $today = date("Y-m-d");
        // @dd($today);
        // $trains = Train
        // ::where('departure_time', 'like', $today . '%')
        // ->get();
        $trains = Train::all();
        // dd($trains);
        // @dd($trains);
        // dd($trains);
        return view('guest.home', [
            'documentTitle' => 'Home',
            'trains' => $trains
        ]);
    }

    public function show(Train $train)
    {
        // dd($train);
        return view('admin.trains.show', [
            'documentTitle' => 'Show Trains',
            'trains' => $train
        ]);
    }
}
