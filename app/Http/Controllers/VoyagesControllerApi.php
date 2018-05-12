<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Storage;
use App\Voyage;
use Illuminate\Http\Request;
//use App\Http\Resources\Voyage as VoyageResource;

class VoyagesControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages=Voyage::all();
        return response()->json($voyages, 100);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Créer un voyage
        $voyage = new Voyage();
        $voyage->nom = $request->input('nom');
        $voyage->description = $request->input('description'); 
        $voyage->caracteristiques = $request->input('caracteristiques'); 
        $voyage->climat = $request->input('climat'); 
        $voyage->user_id = $request->input('user_id');
        $voyage->img_presentation = $request->input('img_presentation');
        $voyage->save();
        return response()->json('success', 100);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function show(Voyage $voyage)
    {
        $voyage = Voyage::find($voyage->id);
        return $voyage;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyage = Voyage::find($voyage->id);
        $voyage->nom = $request->input('nom');
        $voyage->description = $request->input('description');
        $voyage->caracteristiques = $request->input('caracteristiques');    
        $voyage->climat = $request->input('climat');  
        $voyage->img_presentation = $request->input('img_presentation');          
        $voyage->save();
        return response()->json('sucess', 100);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $voyage)
    {
        $voyage = Voyage::find($voyage);
        $voyage->delete();
        return response('success', 100);
    }
}
