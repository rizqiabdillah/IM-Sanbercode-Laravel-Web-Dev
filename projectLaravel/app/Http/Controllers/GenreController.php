<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function create()
    {
        return view('genre.tambah');
    }
    
    public function store (Request $request) 
    {
        $request->validate([
            'nama' => 'required'
        ]);

        DB::table('genre')->insert([
            'nama' => $request['nama']
        ]);
        return redirect('/genre');
    }

    public function index()
    {
        $genre = DB::table('genre')->get();

        return view('genre.tampil', ['genre' => $genre]);
    }

    public function show($id)
    {
        $genre = DB::table('genre')->where('id',$id)->first();

        return view('genre.detail', ['genre' => $genre]);
    }

    public function edit($id)
    {
        $genre = DB::table('genre')->where('id', $id)->first();

        return view('genre.edit', ['genre' => $genre]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        DB::table('genre')
        ->where('id', $id)
        ->update([
            'nama' => $request->input('nama')
        ]);

    return redirect('/genre');
    }

    public function destroy ($id)
    {
        DB::table('genre')->where('id', $id)->delete();

        return redirect('/genre');
    }

}
