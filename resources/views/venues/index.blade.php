@extends('layouts.app')

@section('title', '| Full List of Venues')
@section('content')
    <section class="header">
      <h1 class="page-header">Full List of Venues 
      </h1>
    </section>

    <section class="venues row mx-1">
      @foreach ($venues as $venue)
        <div class="venue">
  {{--         
          @php
          echo "<pre>";
          echo $venue->name;
          //echo $venue->tags[0]->category_id;
          
          print_r($venue);
          echo "</pre>";

          @endphp --}}


          <div class="card" style="width: 30rem;">
          <h3 class="card-title">{{ $venue->name}}</h3>
          <div class="card-title card-tags">
            <i class="far fa-compass"> Prague 1 </i>
            <i class="fas fa-dollar-sign"> Cheap  </i>
            <i class="fas fa-cocktail"> Night Club </i>
            <i class="far fa-grin-tongue"> Chill with Mates </i>
            <i class="fas fa-music"> Latino </i>

          </div>
          <img class="card-img-top" src="{{URL::asset('/images/sample_banner.jpg')}}" height="200" width="200" alt="$venue->banner_img">
          <div class="card-tags">
            {{-- @foreach ($times as $time)
            <p class="card-tag ">{{$time->days." ".$time->opening." ".$time->closing}} </p>    
            @endforeach --}}
          </div>
          <div class="card-body">
          <p class="card-text text-justify">{{ substr($venue->description, 0, 100) }} {{ strlen($venue->description) > 100 ? "..." : ""  }}</p> 
          <hr>

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

