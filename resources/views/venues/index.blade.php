@extends('layouts.app');

@section('title', '| Full List of Venues')
@section('content')
    <h1>ADMIN: Full List of Venues</h1>

    @foreach ($venues as $venue)
    <div class="card" style="width: 30rem;">
    <img class="card-img-top" src="{{ $venue->banner_img }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ $venue->name }}</h5>
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
    @endforeach
  </div>
@endsection