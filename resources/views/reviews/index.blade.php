@extends('layouts.app')
@section('content')
  <h1>Reviews</h1>
  @if(count($reviews) > 0)
    @foreach($reviews as $review)
      <div class="well">
        <a href="/reviews/{{$review->id}}"><h3>{{$review->id}}</h3></>
      <small>Written on: {{ $review->created_at }}</small>
      <small>Updated on: {{ $review->updated_at }}</small>
      </div>
    @endforeach
  @else 
    <p>No reviews submitted</p>
  @endif
@endsection
