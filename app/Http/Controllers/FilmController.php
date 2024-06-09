<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::all();
        // dd($genre);
        return view('page.film', ['film' => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fitur.tambah');
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
            'poster' => 'required',
        ],
        [
            'tahun.required' => 'tahun tidak boleh kosong'
        ]);

        $film = new Film;
 
        $film->judul = $request->input('judul');
        $film->ringkasan = $request->input('ringkasan');
        $film->tahun = $request->input('tahun');
        $film->poster = $request->input('poster');
        $film->genre_id = $request->input('genre_id');
 
        $film->save();
 
        return redirect('/genre');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);

        return view('fitur.tampil', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);

        return view('fitur.edit', ['film' => $film]);
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
            'poster' => 'required',
        ],
        [
            'tahun.required' => 'tahun tidak boleh kosong'
        ]);

        Film::where('id', $id)
            ->update([
                    'judul' => $request->input('judul'),
                    'ringkasan' => $request->input('ringkasan'),
                    'tahun' => $request->input('tahun'),
                    'poster' => $request->input('poster'),
            ]);

        return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Film::where('id', $id)->delete();

        return redirect('/genre');
    }
}
