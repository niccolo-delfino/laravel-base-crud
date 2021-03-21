<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $film = Movie::all();

      $data = [
        'film' => $film
      ];

      return view('movies.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      $request->validate([
        'titolo' => 'required | unique:movies',
        'regista' => 'required | unique:movies',
        'protagonista' => 'required | unique:movies'
      ]);

      $movieNew = new Movie();
      // $movieNew->titolo = $data['titolo'];
      // $movieNew->regista = $data['regista'];
      // $movieNew->protagonista = $data['protagonista'];
      $movieNew->fill($data);

      $movieNew->save();

      return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {

      // $film = Movie::find($id);

      if ($movie) {

        $data = [
          'video' => $movie
        ];
        return view('movies.show', $data);
      }

      abort('404');
    }
    // public function show($id)
    // {
    //   $film = Movie::find($id);
    //
    //   if ($film) {
    //
    //     $data = [
    //       'video' => $film
    //     ];
    //     return view('movies.show', $data);
    //   }
    //
    //   abort('404');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
      if ($movie) {

        $data = [
          'video' => $movie
        ];
        return view('movies.edit', $data);
      }

      abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
