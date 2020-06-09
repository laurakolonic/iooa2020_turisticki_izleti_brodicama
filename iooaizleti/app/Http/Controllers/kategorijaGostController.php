<?php

namespace App\Http\Controllers;

use App\KategorijaGost;
use Illuminate\Http\Request;

class kategorijaGostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('cms/kategorija/index')->with('kategorije', KategorijaGost::all());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('cms.kategorija.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        kategorijaGost::create([
            'nazivKategorija'=>$request->nazivKategorija, 
            'godinaRodenja'=>$request->godinaRodenja, 
            'tekucaGodina'=>$request->tekucaGodina, 
            'cijena'=>$request->cijena
            
        ]);
        return redirect(route('kategorija.index'));
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
    public function edit(KategorijaGost $kategorija)
    {
        return view ('cms.kategorija.create')->with('kategorija', $kategorija);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategorijaGost $kategorija)
    {
        $kategorija->update([ 
            'nazivKategorija'=>$request->nazivKategorija, 
            'godinaRodenja'=>$request->godinaRodenja, 
            'tekucaGodina'=>$request->tekucaGodina, 
            'cijena'=>$request->cijena
        ]);
        return redirect(route('kategorija.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategorijaGost $kategorija)
    {
        $kategorija->delete();
        return redirect(route('kategorija.index'));
    }
}
