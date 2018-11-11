@extends('layouts.app')
  

@section('title', '| View Specific Venue')
@section('content')
  <div class="venue">
    <div class="card" style="width: 30rem;">
      <h3 class="card-title">{{ $venue->name }}</h3>
      <div class="card-title card-tags">
        <p class="card-title ">Location: {{ $venue->location }}</p>
        <p class="card-title ">Venue Type: {{ $venue->venuetype }}</p>
      </div>
      <img class="card-img-top" src=".../180px100/" alt="$venue->banner_img">
      <div class="card-title card-tags">
        <i class="fas fa-dollar sign"></i> <p class="card-title ">{{ $venue->budget }}</p>
        <p class="card-title ">Night Type: {{ $venue->nighttype }}</p>
      </div>
      <div class="card-body">
        <p class="card-text">{{ $venue->description }}</p> 
        <a href="{{ $venue->link  }}" target="_blank" class="btn btn-primary">Website</a>
      </div>
    </div>
  </div>
@endsection