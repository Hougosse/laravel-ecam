@extends('layouts.app')

@section('content')
<h1>Recherche personnalisée</h1>
<h3>Lancez votre recherche personnalisée en remplissant le formulaire ci-dessous</h3>
<form method="POST" action="http://localhost:8888/traveltest/public/users/{{$user->id}}" class="m-5">
    <input type="hidden" name="_method" value="put"/>
    {{ csrf_field() }}
    <div class ="form-group">
        <label>Caractéristiques</label> :* <br><input type="radio" name="caracteristiques" value="aventurier" required> Aventurier<br>
            <input type="radio" name="caracteristiques" value="curieux" required> Curieux<br>
            <input type="radio" name="caracteristiques" value="calme" required> Calme <br>

        <br><label>Climat</label> :* <br>
            <input type="radio" name="climat" value="tropical" required> Tropical<br>
            <input type="radio" name="climat" value="tempéré" required> Tempéré<br>
            <input type="radio" name="climat" value="montagneux" required> Montagneux <br>
    </div>
    <button type="submit" class="btn btn-primary">Chercher</button>
</form>

@endsection