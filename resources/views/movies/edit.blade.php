@extends('layouts.app')
@section('title','gestione film')

@section('content')
<h1>Inserisci un film</h1>


<div class="container">
  <form method="post" action="{{ route('movies.update', $video->id)}}">
    @method('PUT')
    @csrf
  <div class="form-group">
    <label for="inputFilm">Titolo</label>
    <input type="text" class="form-control" name="titolo" id="inputFilm" value="{{$video->titolo}}">
  </div>
  <div class="form-group">
    <label for="inputRegista">Regista</label>
    <input type="text" class="form-control" name="regista" id="inputRegista" value="{{$video->regista}}">
  </div>
  <div class="form-group">
    <label for="inputProtagonista">Protagonista</label>
    <input type="text" class="form-control" name="protagonista" id="inputProtagonista" value="{{$video->protagonista}}">
  </div>
  <button type="submit" class="btn btn-primary">Modifica</button>
</form>
</div>
@endsection
