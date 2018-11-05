@extends('layouts.app')

@section('title', '| All Reviews')
@section('content')
  <h1>All Reviews</h1>
  
   {{-- LOOPTHRO: Controller view($data) --}}
   {{-- {{ dd($reviews) }} --}}
  @if(count($reviews) > 0) 
    @foreach($reviews as $review)
      <div class="well">
        <div class="card-title card-tags">

          {{--  --}}
            {{-- <p class="card-title ">Location: {{ $review->venue->location }}</p>
            <p class="card-title ">Venue Type: {{ $review->venue->venue_type }}</p> --}}
        </div>
        <h3><a href="/reviews/{{ $review->id }}">{{ $review->title }}</h3>
        <h5>{{ $review->body }}</h5>  
        <small>Updated on: {{ date('M j, Y', strtotime($review->updated_at)) }}</small>
        <br>
        <small>Written on: {{ date('M j, Y', strtotime($review->created_at)) }}</small>
      </div>
    @endforeach
    {{-- Pagination Links --}}
    {{ $reviews->links() }}
  @else 
    <p>No reviews submitted</p>
  @endif
@endsection




