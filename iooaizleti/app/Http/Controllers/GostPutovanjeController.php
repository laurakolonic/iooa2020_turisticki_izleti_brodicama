<?php

namespace App\Http\Controllers;

use App\Putovanje;
use Carbon\Carbon;
use App\gostPutovanje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GostPutovanjeController extends Controller
{
    public function index()
    {
        return view('welcome')->with('putovanja', Putovanje::all());
    }

    public function pregled(Request $request)
    {
        $datum = $request->datum;
        return view('welcome')->with('putovanja', Putovanje::where('datum', '=', $datum)->get());
    }

    public function rezerviraj($putovanje)
    {
        $userBorn = new Carbon(Auth::user()->datumRodenja);
        $dateToday = new Carbon(now());
        $godine_gosta = $dateToday->diffInYears($userBorn);
        if($godine_gosta<12){
            $cijena=Putovanje::find($putovanje)->cijena/2;
        }else{
            $cijena=Putovanje::find($putovanje)->cijena;
        }

        $rezervacija = gostPutovanje::create([
            'idGost' => Auth::user()->id,
            'idPutovanje' => Putovanje::find($putovanje)->id,
            'cijenaGosta' => $cijena,
        ]);

        return view('rezervacija', compact('rezervacija'));
    }
}