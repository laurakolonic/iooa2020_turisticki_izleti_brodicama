<?php

namespace App\Http\Controllers;

use App\Brod;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBrod;
use App\Http\Requests\UpdateBrod;

class BrodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cms/brod/index')->with('brodice', Brod::all());
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.brod.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrod $request)
    {
        Brod::create([
            'nazivBrod'=>$request->nazivBrod, 
            'opisBrod'=>$request->opisBrod,
            
        ]);

        return redirect(route('brod.index'));
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
    public function edit(Brod $brod)
    {
        return view ('cms.brod.create')->with('brod', $brod);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrod $request, Brod $brod) 
    {
        $brod->update([ 
            'nazivBrod'=>$request->nazivBrod, 
            'opisBrod'=>$request->opisBrod,
        ]);
        return redirect(route('brod.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brod $brod)
    {
        $brod->delete(); 
        return redirect(route('brod.index'));
    }
}
