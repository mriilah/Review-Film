@extends('layout.master')

@section('content')
<a href="/tambahcast" class="btn btn-sm btn-primary">tambah Cast</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Bio</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key=>$item)
        <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->nama}}</td>
        <td>{{$item->umur}}</td>
        <td>{{$item->bio}}</td>
        <td>
            <form action="/cast/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                <a href="/cast/{{ $item -> id }}/edit" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i></a>
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-eraser"></i></button>
            </form>
        </td>
      </tr>         
        @empty
        <tr>
            <th>Tidak Ada Cast</th>
        </tr>
        @endforelse
    </tbody>
  </table>
@endsection