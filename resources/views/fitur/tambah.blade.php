@extends('layout.master')

@section('content')

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
                            <label for="name">Judul</label>
                            <input type="name" class="input" name="judul" id="name" placeholder="Masukan Judul..." autocomplete="on" required>
                        </fieldset>
                    </div>

                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <label for="message">Ringkasan</label>
                            <textarea name="ringkasan" id="message" placeholder="Your Message" autocomplete="on" required></textarea>
                        </fieldset>
                    </div>

                    <div class="col-lg-12" >
                        <fieldset>
                            <label for="subject">Tahun</label>
                            <input type="number" id="tentacles" class="input" name="tahun" min="2000" max="2024" />
                        </fieldset>
                    </div>
                    
                    
                    <div class="col-lg-12">
                        <fieldset>
                            <label for="subject">Masukan Gambar Poster</label>
                            <input type="file" class="input" id="avatar" name="poster" accept="image/png, image/jpeg" required>
                        </fieldset>
                    </div>
                    

                    <div class="col-lg-12">
                      <fieldset>
                              <label for="subject">Pilih Genre</label>
                              
                              <div class="container">
                                  @forelse ($genre as $item)
                                  <label for="checkbox-1">
                                      <input type="radio" value="{{ $item->id }}" id="" name="genre_id"/>
                                       {{ $item->nama }}
                                  </label>
                                  @empty
                                    Belum Ada
                                  @endforelse
                              </div>
                              
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