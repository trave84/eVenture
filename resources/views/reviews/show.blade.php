@extends('layouts.app')

@section('title', '| Reviews')
@section('content')
  <a href="/reviews" class="btn btn-default">Go back</a>
  <h1>{{ $review->title }}</h1>
  <div>
    {{-- {{ !!$review->body!! }} --}}
  </div>
  <hr />
  
  @if(count($review) > 0)
    <small>Written on: {{ $review->created_at }} 
        by {{ $review->user->name }}
    </small>
    <hr>

    @guest
    {{-- @else --}}
      @if(Auth::user()->id == $review->user_id)
        <a href="/reviews/{{$review->id}}/edit" class="btn btn-default">Edit</a>

        <form action="{{ action('ReviewController@destroy', [$review->id])}}" method="post">
          @@csrf

        </form>
    @endguest

      <a href="/reviews/{{$review->id}}"><h3>{{$review->id}}</h3></>
      
      <small>Updated on: {{ $review->updated_at }}</small>
      </div>
  {{-- @else  --}}
    <p>No reviews submitted</p>
  @endif

@endsection
