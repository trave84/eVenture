@extends('layouts.app')
  

@section('title', '|')
@section('content')
{{-- <div class="container"> --}}
  <div class="row">
    
    <div class="col-md-8 m-1">
      <div class="card px-1 py-1" style="width: 30rem;">
        <h3 class="card-title">{{ $venue->name }}</h3>
        <div class="card-title card-tags">
          {{-- <p class="card-title ">Location: {{ $venue->tags-> }}</p>
          <p class="card-title ">Venue Type: {{ $venue->venuetype }}</p> --}}
        </div>
        <img class="card-img-top" src="{{URL::asset('/images/sample_banner.jpg')}}" height="200" width="200" alt="$venue->banner_img">
        <div class="card-title card-tags">
          {{-- <i class="fas fa-dollar sign"></i> <p class="card-title ">{{ $venue->budget }}</p>
          <p class="card-title ">Night Type: {{ $venue->nighttype }}</p> --}}
        </div>
        <div class="card-body">
          <p class="card-text text-justify">{{ $venue->description }}</p> 
          <a href="{{ $venue->link  }}" target="_blank" class="btn btn-primary">Website</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 m-1">
        <blockquote class="blockquote">
          <p>Tripadvisor comments</p>
          <blockquote class=""><cite title="John Doe">John Doe</cite></footer>
        </blockquote>
        <div class="clearfix"></div>
        <hr />
        {{-- <blockquote class="blockquote-reverse">
          <p>Photos</p>
        </blockquote>
        <div class="clearfix"></div>
        <hr /> --}}
    </div>
  </div>
{{-- </div> --}}
@endsection