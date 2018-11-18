@extends('layouts.app');

@section('title', '| List or Bars and Pubs')
@section('content')
    <h1>List of Bars and Pubs</h1>

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
        <i class="fas fa-dollar-sign"> </i>
          <i class="fas fa-dollar sign"></i> <p class="card-tg">Budget:</p>
          <i class="fas fa-dollar sign"></i><p class="card-tag">Venue Type: </p>
          <i class="fas fa-dollar sign"></i><p class="card-tag">Night Type: </p>
        </div>
        <img class="card-img-top" src="/public/images/sample_banner.jpg" alt="$venue->banner_img">
        <div class="card-tags">
          {{-- @foreach ($times as $time)
          <p class="card-tag ">{{$time->days." ".$time->opening." ".$time->closing}} </p>    
          @endforeach --}}
        </div>
        <div class="card-body">
        <p class="card-text">{{ substr($venue->description, 0, 100) }} {{ strlen($venue->description) > 100 ? "..." : ""  }}</p> 
        <hr>

        {{-- <a href="show/{{ $poll->id }}" class="card-link">Vote</a> --}}

        {{-- WHEN SLUG IS DONE --}}
        {{-- <a href="{{ route('venues.single', $venue->slug) }}" class="btn btn-primary">Read More</a> --}}

        <a href="venues/show/{{ $venue->id }}" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>
  @endforeach
@endsection

