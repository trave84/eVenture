@extends('layouts.app')

@section('title', '| Full List of Venues')
@section('content')
    
    <section class="header jumbotron">
      <h1 class="page-header"> Venues in Prague 
      </h1>
    </section>

    <section class="venues row  d-flex justify-content-around align-content-stretch flex-wrap">
      @foreach ($venues as $venue)
      {{--         
        @php
        echo "<pre>";
          echo $venue->name;
          //echo $venue->tags[0]->category_id;
          print_r($venue);
          echo "</pre>";
          @endphp --}}
          
          <div class="venue">
          <div class="card my-2" style="width: 20rem;">
          <h3 class="card-title">{{ $venue->name}}</h3>
          <div class="card-title card-tags">
            <i class="fas fa-cocktail"> </i> <span> Cocktail bar / Restaurant bar </span>
            <i class="far fa-compass"> </i> <span> Prague 1 </span>
          </div>
          {{-- <img class="card-img-top" src="{{URL::asset('/images/sample_banner.jpg')}}" height="200" width="200" alt="$venue->banner_img"> --}}
          <img class="card-img-top" src="{{$venue->banner_img}}" height="200" width="200" alt="$venue->banner_img">
          <div class="card-tags">
            {{-- @foreach ($times as $time)
              <p class="card-tag ">{{$time->days." ".$time->opening." ".$time->closing}} </p>    
              @endforeach --}}
            </div>
            <div class="card-body">
              <p class="card-text text-justify">{{ substr($venue->description, 0, 100) }} {{ strlen($venue->description) > 100 ? "..." : ""  }}</p> 
              <hr>
              
              <p><i class="fas fa-spinner"></i> Bowling, Darts </p>
              <p><i class="far fa-grin-tongue"> </i> Chill with Mates/ LGBT Fun </p>
              <p><i class="fas fa-dollar-sign"> </i> Cheap </p>
              <p><i class="fas fa-music"></i> Latino </p>
              <p><i class="fas fa-utensils"></i> Colombian, Brazilian </p>
          {{-- <a href="show/{{ $poll->id }}" class="card-link">Vote</a> --}}

          {{-- WHEN SLUG IS DONE --}}
          {{-- <a href="{{ route('venues.single', $venue->slug) }}" class="btn btn-primary">Read More</a> --}}

          <a href="venues/show/{{ $venue->id }}" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
    @endforeach
  </section>
@endsection

