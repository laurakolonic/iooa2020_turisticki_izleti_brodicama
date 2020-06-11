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

        if(gostPutovanje::where('idGost', '=', Auth::user()->id)->count() >0 
            && gostPutovanje::where('idPutovanje', '=', Putovanje::find($putovanje)->id)->count() >0){
                $status = "Rezervacija već postoji";
                return view('rezervacija', compact('status'));
            }

        $rezervacija = gostPutovanje::create([
            'idGost' => Auth::user()->id,
            'idPutovanje' => Putovanje::find($putovanje)->id,
            'cijenaGosta' => $cijena,
        ]);

        return view('rezervacija', compact('rezervacija'));
    }

    public function destroy(Putovanje $rezervacija)
    {
        $rezervacija->delete(); 
        return redirect(route('rezervacija.index'));
    }

    public function pregledsvojihrezervacija()
    {
        $gostputovanja = gostPutovanje::with('gost', 'putovanje')
        ->leftJoin('users', 'users.id', '=', 'gost_putovanjes.idGost')
        ->where('idGost', '=', Auth::user()->id)->get();
        return view('pregledsvojihputovanja',compact('gostputovanja'));
    }
    public function izbrisirezervaciju($id)
    {
        $putovanje = gostPutovanje::where('idPutovanje','=',$id)
        ->where('idGost','=', Auth::user()->id)->delete();
        return redirect(route('pregledsvojihrezervacija.pregled'));
    }
}