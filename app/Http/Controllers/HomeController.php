<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\SeismicStation;
use App\SdsIndex;

class HomeController extends Controller
{
    public function index()
    {
        $alats = SeismicStation::select('scnl','latitude','longitude','elevasi')
                    ->whereNotNull('latitude')
                    ->withCount('data')
                    ->get();
        return view('home.index', compact('alats'));
    }

    public function station()
    {
        $stations = SeismicStation::withCount('data')->get()->reject(function($item) {
            return $item['data_count'] == 0;
        });
        $bar_label = $stations->pluck('station');
        $bar_dataset = $stations->pluck('data_count');
        return view('home.station.index', compact('stations','bar_label','bar_dataset'));
    }

    public function data()
    {
        $sdses = SdsIndex::orderBy('date')->paginate(20);
        return view('home.data.index', compact('sdses'));
    }

    public function dataShow($scnl)
    {
        $sdses = SdsIndex::where('scnl_id',$scnl)
                ->orderBy('date')
                ->paginate(20);

        $bar_label = $sdses->pluck('date')->map(function($date) {
            return $date->format('Y-m-d');
        });

        $bar_dataset = $sdses->pluck('availability');

        if ($sdses->isEmpty())
            abort(404);

        return view('home.data.show', compact('sdses','bar_label','bar_dataset'));
    }
}
