@extends('layouts.app')
  

@section('title', '|')
@section('content')
{{-- <div class="container"> --}}
  <section class="header jumbotron py-3 mb-0">
    <h1 class="page-header text-center">{{ $venue->name }} </h1>
    <div class="tags-list text-center px-2 d-flex justify-content-between">
      <i class="far fa-compass"> <br> Prague 1 </i>
      <i class="fas fa-dollar-sign"> <br> Cheap  </i>
      <i class="fas fa-cocktail"> <br> Night Club </i>
      <i class="far fa-grin-tongue"> <br> Chill with Mates </i>
      <i class="fas fa-music"> <br> Latino </i>
    </div>
  </section>
  
  <section class="row">
    <div class="back-btn ml-3">
      {!! link_to(URL::previous(), ' << Go back', ['class' => 'btn btn-primary']) !!}
    </div>
    <div class="venues-listing col-lg-8 m-1">
      <div class="card px-1 py-1" style="width: 35rem;">
        <div class="card-title card-tags">
          {{-- <p class="card-title ">Location: {{ $venue->tags-> }}</p>
          <p class="card-title ">Venue Type: {{ $venue->venuetype }}</p> --}}
        </div>
        <img class="card-img-top img-fluid" src="{{URL::asset('/images/sample_banner.jpg')}}"  alt="asset_image">
        <img class="card-img-top img-fluid" src="{{$venue->banner_img}}"  alt="$venue->banner_img">
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

    <div class="side-bar col-md-3 m-1">
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
  </section>
{{-- </div> --}}
@endsection