@extends('layouts.app')

@section('content')
<h1>Editer un voyage</h1>

<form method="POST" action="http://localhost:8888/traveltest/public/voyages/{{$voyage->id}}" class="m-5" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="put"/>
    {{ csrf_field() }}
    <div class ="form-group">
        <label>Nom du voyage</label> :* <input type="text" class="form-control" name="nom"
    value="{{$voyage->nom}}" placeholder="Entrer le nom du voyage" required> <br>

        <label>Description</label> :* 
            <textarea type="textarea" class="form-control" name="description" value="{{$voyage->description}}" placeholder="Entrer la description du voyage" required> </textarea>

        <label>Caractéristiques</label> :* <br><input type="radio" name="caracteristiques" value="aventurier" required> Aventurier<br>
            <input type="radio" name="caracteristiques" value="curieux" required> Curieux<br>
            <input type="radio" name="caracteristiques" value="calme" required> Calme <br>

        <br><label>Climat</label> :* <br>
            <input type="radio" name="climat" value="tropical" required> Tropical<br>
            <input type="radio" name="climat" value="tempéré" required> Tempéré<br>
            <input type="radio" name="climat" value="montagneux" required> Montagneux <br>

            <br><input type="file" name="img_presentation" size=50>
            <input type="hidden" name="MAX_FILE_SIZE" value="1999">
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
@endsection