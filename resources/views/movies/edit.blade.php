@extends('layouts.app')
@section('title','gestione film')

@section('content')
<h1>Inserisci un film</h1>


<div class="container">
  <form method="post" action="">
    @method('POST')
    @csrf
  <div class="form-group">
    <label for="inputFilm">Titolo</label>
    <input type="text" class="form-control" name="titolo" id="inputFilm">
  </div>
  <div class="form-group">
    <label for="inputRegista">Regista</label>
    <input type="text" class="form-control" name="regista" id="inputRegista">
  </div>
  <div class="form-group">
    <label for="inputProtagonista">Protagonista</label>
    <input type="text" class="form-control" name="protagonista" id="inputProtagonista">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
