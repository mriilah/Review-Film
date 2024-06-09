@extends('layout.master')

@section('content')
{{-- <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"
        integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ"
        crossorigin="anonymous">
    </script>
          @forelse ($film->listGenre as $item)
          <div class="container d-flex contact-page section" cards-wrapper=>
            <div class="row">
              <div class ="cpl-md-4">
              <div class="card shadow" style="width: 18rem;" >
              <div class="card-body">
                <img src="https://cdn.pixabay.com/photo/2022/06/21/06/13/the-wasp-7275216_1280.jpg" alt=""></a>

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