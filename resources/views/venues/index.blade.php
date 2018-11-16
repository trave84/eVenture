@extends('layouts.app');

@section('title', '| Full List of Venues')
@section('content')
    <h1>ADMIN: Full List of Venues</h1>

    @foreach ($venues as $venue)
      <div class="venue">
        <div class="card" style="width: 30rem;">
        <h3 class="card-title">name</h3>
        <div class="card-title card-tags">
          <p class="card-title ">Location: {{ $venue->tags }}</p>
          {{-- <p class="card-title ">Venue Type: {{ $venue->venuetype->name }}</p> --}}
        </div>
        <img class="card-img-top" src=".../180px100/" alt="$venue->banner_img">
        <div class="card-title card-tags">
          <i class="fas fa-dollar sign"></i> <p class="card-title ">{{ $venue->budget }}</p>
          {{-- <p class="card-title ">Night Type:{{ $venue->nighttype }}</p> --}}
          {{-- @foreach ($times as $time)
          <p class="card-title ">{{$time->days." ".$time->opening." ".$time->closing}} </p>    
          @endforeach --}}
          
        </div>
        <div class="card-body">
        <p class="card-text">{{ substr($venue->description, 0, 100) }} {{ strlen($venue->description) > 100 ? "..." : ""  }}</p> 
        <hr>

        {{-- <a href="show/{{ $poll->id }}" class="card-link">Vote</a> --}}

        {{-- WHEN SLUG IS DONE --}}
        {{-- <a href="{{ route('venues.single', $venue->slug) }}" class="btn btn-primary">Read More</a> --}}

        <a href="venues/show/{{ $venue->id }}" class="btn btn-primary">View</a>
        <a href="venues/edit/{{ $venue->id }}" class="btn btn-primary">Edit</a>
        <a href="venues/delete/{{ $venue->id }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
    </div>
  @endforeach
@endsection

