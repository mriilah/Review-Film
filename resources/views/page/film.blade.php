@extends('layout.master')

@section('content')
    
<div class="page-heading header-text mb-3 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
          <h3>Genre</h3>
        </div>
      </div>
    </div>
</div>

<div class="section properties">
  <div class="container">
    <ul class="properties-filter p-5">
      @forelse ($genre as $item)
      
      <li>
        <a href="/genre/{{ $item -> id }}" data-filter="*">{{ $item->nama }}</a>
      </li>
          
      @empty
          
      @endforelse
    </ul>
  </div>
</div>

  @endsection