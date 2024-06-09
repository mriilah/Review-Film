@extends('layout.master')

@section('content')

<div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <span class="category">{{ $film->nama }}</span>
            <h4></h4>
            <p>{{ $film->ringkasan }}</p>
          </div> 
          <div class="row properties-box">
            @forelse ($film->listGenre as $item)
            <div class="col-lg-4 col-md-6 mb-30 properties-items col-md-6 str">
              <div class="item">
                <a href="property-details.html"><img src="https://cdn.pixabay.com/photo/2022/06/21/06/13/the-wasp-7275216_1280.jpg" alt=""></a>
                <span class="category">Luxury Villa</span>
                <h4><a href="/film/{{ $item -> id }}">{{ $item->judul }}</a></h4>
                <ul>
                  <li><span>{{ $item->ringkasan }}</span></li>
                  <hr>
                  <li>Tahun: <span>{{ $item->tahun }}</span></li>
                </ul>
                <form action="/film/{{ $item->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                  <a href="/film/{{ $item -> id }}/edit" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"></i></a>
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-sm"><i class="fa-solid fa-eraser"></i></button>
              </form>
              </div>
            </div>
            @empty
                Tidak Ada
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection