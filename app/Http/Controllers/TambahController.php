<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
class TambahController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        // dd($genre);
        return view('fitur.tambah', ['genre' => $genre]);
    }
}
