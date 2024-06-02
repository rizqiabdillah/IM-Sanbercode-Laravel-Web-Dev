<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;
use File;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::get();
        return view('film.index', ['film' => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::get();
        return view('film.create', ['genre' => $genre]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|image|mimes:png,jpg,jpeg',
            'genre_id' => 'required'
        ]);

        $fileName = time().'.'.$request->poster->extension();

        $request->poster->move(public_path('image'), $fileName);

        
        $film = new Film;

        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->poster = $fileName;
        $film->genre_id = $request->genre_id;

        $film->save();

        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);

        return view('film.detail', ['film' =>$film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);
        $genre = Genre::get();

        return view('film.update', ['film' => $film, 'genre' =>$genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'image|mimes:png,jpg,jpeg',
            'genre_id' => 'required'
        ]);

        $film = Film::find($id);

        
        if($request->has('poster')){
            $path = 'image/';
            File::delete($path. $film->poster);

            $fileName = time().'.'.$request->poster->extension();

            $request->poster->move(public_path('image'), $fileName);

            $film->poster = $fileName;
            $film->save();

        }

        $film->judul = $request['judul'];
        $film->ringkasan = $request['ringkasan'];
        $film->tahun = $request['tahun'];
        $film->genre_id = $request['genre_id'];

        $film->save();

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::find($id);

        $path = 'image/';
        
        File::delete($path. $film->poster);
 
        $film->delete();

        return redirect('/film');
    }
}
