<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voyage;

class VoyagesControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = Voyage::all();
        return $voyages;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voyage = new Voyage();
        $voyage->nom = $request->input('nom');
        $voyage->description = $request->input('description'); 
        $voyage->caracteristiques = $request->input('caracteristiques'); 
        $voyage->climat = $request->input('climat'); 
        $voyage->img_presentation = $request->input('img_presentation');
        $voyage->save();
        return response()->json('success', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $voyage = Voyage::find($id);
        return $voyage;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $voyage = Voyage::find($id);
        $voyage->nom = $request->input('nom');
        $voyage->description = $request->input('description');
        $voyage->caracteristiques = $request->input('caracteristiques');    
        $voyage->climat = $request->input('climat');  
        $voyage->img_presentation = $request->input('img_presentation');          
        $voyage->save();
        return response()->json('success', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voyage = Voyage::find($id);
        $voyage->delete();
        return response('success', 200);
    }
}
