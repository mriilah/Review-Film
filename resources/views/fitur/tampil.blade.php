@extends('layout.master')

@section('content')

<div class="single-property section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        
        
        <div class="main-image">
          <img src="assets/images/single-property.jpg" alt="">
        </div>
        <div class="main-content">
          <h4>{{ $film->judul }}</h4>
          <p><strong>{{ $film->ringkasan }}</strong></p>
          <hr>
          <li>Tahun: <span>{{ $film->tahun }}</span></li>
        </div> 

        
      </div>
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
</div>

@endsection