<?php

namespace App\Http\Controllers;

use App\Zaposlenik;
use Illuminate\Http\Request;

class ZaposlenikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('cms/zaposlenik/index')->with('zaposlenici', Zaposlenik::all());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.zaposlenik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Zaposlenik::create([
            'oibZaposlenik'=>$request->oibZaposlenik, 
            'imeZaposlenik'=>$request->imeZaposlenik, 
            'PrezimeZaposlenik'=>$request->PrezimeZaposlenik, 
            'datumRodenja'=>$request->datumRodenja
            
        ]);

        return redirect(route('zaposlenik.index'));
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
    public function edit(Zaposlenik $zaposlenik)
    {
        return view ('cms.zaposlenik.create')->with('zaposlenik', $zaposlenik);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zaposlenik $zaposlenik)
    {
        $zaposlenik->update([ 
            'oibZaposlenik'=>$request->oibZaposlenik, 
            'imeZaposlenik'=>$request->imeZaposlenik, 
            'PrezimeZaposlenik'=>$request->PrezimeZaposlenik, 
            'datumRodenja'=>$request->datumRodenja
        ]);
        return redirect(route('zaposlenik.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zaposlenik $zaposlenik)
    {
        $zaposlenik->delete();
        return redirect(route('zaposlenik.index'));
    }
}
