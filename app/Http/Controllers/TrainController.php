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

    public function insertTrain()
    {
        $data = [
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '2022-02-18 17:40:00',
                'arrival_time' => '2022-02-18 21:12:00',
                'train_code' => '9365',
                'carriages' => '8',
            ],
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Napoli',
                'departure_time' => '2022-02-18 13:40:00',
                'arrival_time' => '2022-02-18 19:12:00',
                'train_code' => '9315',
                'carriages' => '3',
            ]
        ];
        foreach ($data as $train) {
            # code...
            $trains = new Train();
            $trains->fill($train);
            $trains->save();
        }
        dd($trains);
    }
}
