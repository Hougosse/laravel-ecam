@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/traveltest/public/users/{{$user->id}}/edit" class="btn btn-primary mb-4">Lancer une recherche</a>
                    <h3>Vos voyages</h3>
                    @foreach($voyages as $voyage)
                        @if($voyage->climat==$user->climat && $voyage->caracteristiques==$user->caracteristiques)
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
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
