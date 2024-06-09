@extends('layout.master')

@section('content')
    <h1>{{$cast->nama}}</h1>
    <p>{{$cast->bio}}</p>

    <a href="/cast" class="btn btn-sm btn-secondary">Kembali</a>
@endsection