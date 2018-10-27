@extends('layouts.app')
@section('content')
  <a href="/reviews" class="btn btn-default">Go back</a>

  <h1>Your Review</h1>
{{-- <h1>{{ $review->title }}</h1> --}}

  @if(count($review) > 0)
      <a href="/reviews/{{$review->id}}"><h3>{{$review->id}}</h3></>
      <small>Written on: {{ $review->created_at }}</small>
      <small>Updated on: {{ $review->updated_at }}</small>
      </div>
  @else 
    <p>No reviews submitted</p>
  @endif

@endsection
