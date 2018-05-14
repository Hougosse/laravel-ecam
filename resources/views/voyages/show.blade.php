@extends('layouts.app')

@section('content')
<a href="./" class='btn btn-default mt-2'>Retour</a>
<h1 class='mt-3'>{{$voyage->nom}}</h1>
<img style='width:100%' src='http://localhost:8888/traveltest/public/storage/img_presentations/{{$voyage->img_presentation}}' alt='{{$voyage->nom}}'>
<br><br>
<div>{{$voyage->description}}</div >
<hr>
<small>Créé le {{$voyage->created_at}}</small>
<hr>
<a href="/traveltest/public/voyages/{{$voyage->id}}/edit" class='btn btn-primary pull-left'>Editer</a>
<br><br>

<form method="GET" action="http://localhost:8888/traveltest/public/voyages/delete/{{$voyage->id}}" class='pull-right'>
    {{ csrf_field() }}
    <button type='submit' class='btn btn-danger'>Supprimer</button>
</form>

@endsection