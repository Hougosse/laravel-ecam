@extends('layouts.app')

@section('content')
    <h1 class="ml-5">Nos voyages</h1>
    @if(count($voyages) > 0)
        @foreach($voyages as $voyage)
        <div class='well ml-5'>
                <div class='row'>
                    <div class='col-md-4 col-sm-4'>
                        <img style='width:100%' src='http://localhost:8888/traveltest/public/storage/img_presentations/{{$voyage->img_presentation}}'>
                    </div>
                    <div class='col-md-8 col-sm-8'>
                        <h3 class='mt-3'><a href="/traveltest/public/voyages/{{$voyage->id}}"> {{$voyage->nom}}</a></h3>
                        <small>Créé le {{$voyage->created_at}}</small>
                    </div>
                </div>
        </div>
        <hr>
        @endforeach
    @else
        <p> Aucun voyages disponibles</p>
    @endif
    <a href='/traveltest/public/voyages/create' class='btn btn-primary ml-5 mt-3'>Créer un voyage</a>
@endsection