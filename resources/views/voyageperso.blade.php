@extends('layouts.app')

@section('content')
<h1>Recherche personnalisée</h1>
<h3>Lancez votre recherche personnalisée en cliquant sur le bouton</h3>
    <div class='well ml-5'>
        <h3 class='mt-3'><a href="/traveltest/public/voyages/{{$voyage->id}}">{{$voyage->nom}}</a></h3>
            <small>Créé le {{$voyage->created_at}}</small>
    </div>

@endsection