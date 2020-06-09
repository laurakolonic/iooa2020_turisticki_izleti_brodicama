<?php

namespace App\Http\Controllers;

use App\Brod;
use App\Ruta;
use App\Putovanje;
use App\Zaposlenik;
use Illuminate\Http\Request;

class PutovanjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $putovanja=Putovanje::all();

        return view('cms.putovanje.index', compact('putovanja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brodovi=Brod::orderBy('nazivBrod')->get();
        $rute=Ruta::orderBy('nazivRuta')->get();
        $zaposlenici=Zaposlenik::orderBy('PrezimeZaposlenik')->get();
        return view('cms.putovanje.create', compact('brodovi', 'rute', 'zaposlenici'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           Putovanje::create([
            'datum'=>$request->datum,
            'vrijeme'=>$request->vrijeme,
            'idBrod'=>$request->brod,
            'idRuta'=>$request->ruta,
            'idZaposlenik'=>$request->zaposlenik, //jer smo u view nazvali polje zaposlenik
        
        ]);

        return redirect(route('putovanje.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Putovanje $putovanje)
    {
        $brodovi=Brod::orderBy('nazivBrod')->get();
        $rute=Ruta::orderBy('nazivRuta')->get();
        $zaposlenici=Zaposlenik::orderBy('PrezimeZaposlenik')->get();
        return view('cms.putovanje.create', compact ('putovanje', 'brodovi', 'rute', 'zaposlenici'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Putovanje $putovanje)
    {
        $putovanje->update([
            'datum'=>$request->datum,
            'vrijeme'=>$request->vrijeme,
            'idBrod'=>$request->brod,
            'idRuta'=>$request->ruta,
            'idZaposlenik'=>$request->zaposlenik,
        ]);

        return redirect(route('putovanje.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Putovanje $putovanje)
    {
        $putovanje->delete();
        return redirect(route('putovanje.index'));
    }
}
