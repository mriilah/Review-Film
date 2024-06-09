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
    <ul class="properties-filter">
      @forelse ($genre as $item)
      
      <li>
        <a href="/genre/{{ $item -> id }}" data-filter="*">{{ $item->nama }}</a>
      </li>
          
      @empty
          
      @endforelse
    </ul>


    <div class="row">
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a class="is_active" href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">>></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

  @endsection