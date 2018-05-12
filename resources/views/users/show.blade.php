@extends('layouts.app')

@section('content')

@foreach ($voyages as $voyage)
    @if($voyage->climat==$user->climat && $voyage->caracteristiques==$user->caracteristiques)
        {{$user->voyages()->attach($voyage)}};
        <div class='well'>
        <h3><a href="/travelcustomd/public/voyages/{{$voyage->id}}">{{$voyage->nom}}</a></h3>
            <small>Créé le {{$voyage->created_at}}</small>
            <p>Ces voyages pourraient vous intéresser !</p>
        </div>
    @else
        <p>Aucun voyages disponibles</p> 
    @endif
@endforeach

@endsection