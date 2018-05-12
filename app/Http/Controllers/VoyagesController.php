<?php

namespace App\Http\Controllers;

use App\User;
use App\Voyage;
use Illuminate\Http\Request;

class VoyagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages=Voyage::all();
        return view('voyages.index')->with('voyages', $voyages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voyages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Ajouter une image
        if($request->hasFile('img_presentation')){
            //Obtenir le nom du fichier avec extension
            $filenameWithExt = $request->file('img_presentation')->getClientOriginalName();
            //Juste avoir le nom du fichier
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Avoir l'extension
            $extension = $request->file('img_presentation')->getClientOriginalExtension();

            //nom du fichier enregistrer
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Sauvegarder image
            $path = $request->file('img_presentation')->storeAs('public/img_presentations', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //Créer un voyage
        $voyage = new Voyage();
        $voyage->nom = $request->input('nom');
        $voyage->description = $request->input('description'); 
        $voyage->caracteristiques = $request->input('caracteristiques'); 
        $voyage->climat = $request->input('climat'); 
        $voyage->img_presentation = $fileNameToStore;
        $voyage->save();
        return redirect('/voyages');
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
        return view('voyages.show')->with('voyage', $voyage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voyage  $voyage
     * @return \Illuminate\Http\Response
     */
    public function edit(Voyage $voyage)
    {
        $voyage = Voyage::find($voyage->id);
        return view('voyages.edit')->with('voyage', $voyage);
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
        //Ajouter une image
        if($request->hasFile('img_presentation')){
            //Obtenir le nom du fichier avec extension
            $filenameWithExt = $request->file('img_presentation')->getClientOriginalName();
            //Juste avoir le nom du fichier
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Avoir l'extension
            $extension = $request->file('img_presentation')->getClientOriginalExtension();

            //nom du fichier enregistrer
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Sauvegarder image
            $path = $request->file('img_presentation')->storeAs('public/img_presentations', $fileNameToStore);
        }

        $voyage = Voyage::find($voyage->id);
        $voyage->nom = $request->input('nom');
        $voyage->description = $request->input('description');
        $voyage->caracteristiques = $request->input('caracteristiques');    
        $voyage->climat = $request->input('climat');  
        if($request->hasFile('img_presentation')){
            $voyage->img_presentation = $fileNameToStore;
        }            
        $voyage->save();
        return redirect('/voyages');
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
        return redirect('/voyages');
    }

    /*public function voyageperso()
    {
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $dicoVoyages = Voyage::with('users.voyages')->whereId($user_id)->get('id');
        //print ($dicoVoyages);
        //$voyage=Voyage::find($id);
        foreach($user->voyages as $voyage){
            $nom = $voyage->pivot->nom;
            return $nom;
        }
        print $nom;
        //$voyages = User::find($user_id)->voyages;
        //$voyages = $voyages->sortBy('id');
        //print ($voyages);
        print ($dicoVoyages);

        //return view('voyageperso')->with('voyages', $dicoVoyages);
    } */
}
