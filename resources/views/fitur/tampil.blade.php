@extends('layout.master')

@section('content')

<div class="single-property section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        
        
        <div class="main-image">
          <img src="{{ '' }}" alt="">
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
<hr>

<div class="contact-page section">
  <div class="container">
    <div class="row">
      {{-- <div class="col-lg-12"> --}}
        {{-- <div class="section-heading">
          <h6>| Contact Us</h6>
          <h2>Get In Touch With Our Agents</h2>
        </div>
        <p>When you really need to download free CSS templates, please remember our website TemplateMo. Also, tell your friends about our website. Thank you for visiting. There is a variety of Bootstrap HTML CSS templates on our website. If you need more information, please contact us.</p>
        <div class="row">
          <div class="col-lg-12">
            <div class="item phone">
              <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
              <h6>010-020-0340<br><span>Phone Number</span></h6>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="item email">
              <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
              <h6>info@villa.co<br><span>Business Email</span></h6>
            </div>
          </div>
        </div>
      </div> --}}
      <div class="col-lg-12">
        <form id="contact-form" action="/film" method="post">
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
                  <div class="col-lg-12">
                      <fieldset>
                          <label for="message">Ringkasan</label>
                          <textarea name="ringkasan" id="message" placeholder="Your Message" autocomplete="on" required></textarea>
                      </fieldset>
                  </div>

                  <div class="container">
                    <div class="container__items">
                      <input type="radio" name="stars" id="st5">
                      <label for="st5">
                        <div class="star-stroke">
                          <div class="star-fill"></div>
                        </div>
                        <div class="label-description" data-content="Excellent"></div>
                      </label>
                      <input type="radio" name="stars" id="st4">
                      <label for="st4">
                        <div class="star-stroke">
                          <div class="star-fill"></div>
                        </div>
                        <div class="label-description" data-content="Good"></div>
                      </label>
                      <input type="radio" name="stars" id="st3">
                      <label for="st3">
                        <div class="star-stroke">
                          <div class="star-fill"></div>
                        </div>
                        <div class="label-description" data-content="OK"></div>
                      </label>
                      <input type="radio" name="stars" id="st2">
                      <label for="st2">
                        <div class="star-stroke">
                          <div class="star-fill"></div>
                        </div>
                        <div class="label-description" data-content="Bad"></div>
                      </label>
                      <input type="radio" name="stars" id="st1">
                      <label for="st1">
                        <div class="star-stroke">
                          <div class="star-fill"></div>
                        </div>
                        
                        <div class="label-description" data-content="Terrible"></div>
                      </label>
                    </div>
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
</div>
</div>
</div>

@endsection