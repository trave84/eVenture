@extends('layouts.app')
@section('content')
  <h1>Reviews</h1>
  
   {{-- LOOPTHRO: Controller view($data) --}}
   {{-- {{ dd($reviews) }} --}}
  @if(count($reviews) > 0) 
    @foreach($reviews as $review)
      <div class="well">
        <h3><a href="/reviews/{{$review->id}}">{{$review->title}}</h3>
        <h5>{{ $review->body }}</h5>  
      <small>Written on: {{ $review->created_at }}</small>
      <small>Updated on: {{ $review->updated_at }}</small>
      </div>
    @endforeach
    {{ $reviews->links() }}
  @else 
    <p>No reviews submitted</p>
  @endif
@endsection