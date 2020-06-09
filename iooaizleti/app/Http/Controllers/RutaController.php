<?php

namespace App\Http\Controllers;

use App\Ruta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRuta;
use App\Http\Requests\UpdateRuta;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms/ruta/index')->with('rute', Ruta::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.ruta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRuta $request)
    {
        $path = $request-> file('image')->store ('image');
        Ruta::create([
            'nazivRuta'=>$request->nazivRuta, 
            'opisRuta'=>$request->opisRuta,
            'image'=>$path,
            
        ]);

        return redirect(route('ruta.index'));
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
    public function edit(Ruta $rutum)
    {
        return view ('cms.ruta.create')->with('ruta', $rutum);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRuta $request, Ruta $rutum) 
    {
        $rutum->update([ 
            'nazivRuta'=>$request->nazivRuta, 
            'opisRuta'=>$request->opisRuta,
            'image'=> $request->file('image')->store('image'),
        ]);
        return redirect(route('ruta.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
        public function destroy(Ruta $rutum)
        {
            $rutum->delete();
            return redirect(route('ruta.index'));
        }
    
}
