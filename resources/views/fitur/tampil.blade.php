@extends('layout.master')

@section('content')

<div class="single-property section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        
        
        <div class="main-image">
          <img src="{{ '/template/assets/images/home.jpg' }}" alt="">
        </div>
        <div class="main-content">
          <h4>{{ $film->judul }}</h4>
          <p><strong>{{ $film->ringkasan }}</strong></p>
          <hr>
          <li>Tahun: <span>{{ $film->tahun }}</span></li>
        </div> 

        
      {{-- </div>
      <div class="col-lg-4">
        <div class="info-table">
          <ul>
            <li>
              <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
              <h4>450 m2<br><span>Total Flat Space</span></h4>
            </li>
            <li>
              <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
              <h4>Contract<br><span>Contract Ready</span></h4>
            </li>
            <li>
              <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
              <h4>Payment<br><span>Payment Process</span></h4>
            </li>
            <li>
              <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
              <h4>Safety<br><span>24/7 Under Control</span></h4>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<hr>

<div class="col-lg-12">
  <form id="contact-form" action="/kritik/{{ $film->id }}" method="post">
    {{-- Validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form --}}
    @csrf
    <div class="row">

            </div>
            <div class="col-lg-12">
                <fieldset>
                    <label for="message">Kritik</label>
                    <textarea name="content" id="message" placeholder="Masukkan Kritik" required></textarea>
                </fieldset>
            </div>

            <div class="col-lg-12">
              <fieldset>
                  <label for="message">point</label>
                  <textarea name="content" id="message" placeholder="Point" required></textarea>
              </fieldset>
          </div>

            
            
            <fieldset>
            <button type="submit" id="form-submit" class="orange-button" onclick="myFunction()">Send Message</button>
            </fieldset>
            
    </div>
  </form>
</div>
</div>
</div>
</div>

@endsection