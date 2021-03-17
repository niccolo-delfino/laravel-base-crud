@extends('layouts.app')
@section('title','film')

@section('content')
ciao sono l'elenco dei film

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Regista</th>
      <th scope="col">Protagonista</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">{{ $video->id }}</th>
      <td>{{ $video->titolo }}</td>
      <td>{{ $video->regista }}</td>
      <td>{{ $video->protagonista }}</td>
    </tr>

  </tbody>
</table>
@endsection
