@extends('layouts.app')
@section('title','film')

@section('content')
<h1>ciao sono l'elenco dei film</h1>
<a href="{{ route('movies.create')}}">Inserisci un film</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Regista</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($film as $video)
    <tr>
      <th scope="row">{{ $video->id }}</th>
      <td>{{ $video->titolo }}</td>
      <td>{{ $video->regista }}</td>
      <td><a href="{{ route('movies.show', ['movie' => $video->id])}}">dettagli</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
