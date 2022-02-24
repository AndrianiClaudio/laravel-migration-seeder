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
            'train' => $train
        ]);
    }
    // public function insertTrain()
    // {
    //     $data = [
    //         [
    //             'agency' => 'Trenitalia',
    //             'departure_station' => 'Milano Centrale',
    //             'arrival_station' => 'Roma Termini',
    //             'departure_time' => '2022-02-18 17:40:00',
    //             'arrival_time' => '2022-02-18 21:12:00',
    //             'train_code' => '9365',
    //             'carriages' => '8',
    //         ],
    //         [
    //             'agency' => 'Trenitalia',
    //             'departure_station' => 'Milano Centrale',
    //             'arrival_station' => 'Napoli',
    //             'departure_time' => '2022-02-18 13:40:00',
    //             'arrival_time' => '2022-02-18 19:12:00',
    //             'train_code' => '9315',
    //             'carriages' => '3',
    //         ],
    //         [
    //             'agency' => 'Frecciarossa',
    //             'departure_station' => 'Milano Centrale',
    //             'arrival_station' => 'Napoli',
    //             'departure_time' => '2022-02-18 13:40:00',
    //             'arrival_time' => '2022-02-18 16:50:00',
    //             'train_code' => '7124',
    //             'carriages' => '8',
    //         ],
    //         [
    //             'agency' => 'Frecciarossa',
    //             'departure_station' => 'Roma',
    //             'arrival_station' => 'Napoli',
    //             'departure_time' => '2022-03-18 16:40:00',
    //             'arrival_time' => '2022-03-18 15:50:00',
    //             'train_code' => '7124',
    //             'carriages' => '8',
    //         ],
    //         [
    //             'agency' => 'Frecciarossa',
    //             'departure_station' => 'Milano',
    //             'arrival_station' => 'Napoli',
    //             'departure_time' => '2022-03-18 18:40:00',
    //             'arrival_time' => '2022-03-18 20:50:00',
    //             'train_code' => '6812',
    //             'carriages' => '8',
    //         ],
    //     ];
    //     $data_send = [];
    //     foreach ($data as $train) {
    //         # code...
    //         $trains = new Train();
    //         $trains->fill($train);
    //         $data_send[] = $trains;
    //         $trains->save();
    //     }
    //     return view('guest.home', [
    //         'documentTitle' => 'Home',
    //         'trains' => $data_send
    //     ]);
    // }
}
