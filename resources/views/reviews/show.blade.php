@extends('layouts.app')

@section('title', '| Reviews')
@section('content')
  <a href="/reviews" class="btn btn-default">Go back</a>
  <h1>{{ $review->title }}</h1>
  <br><br>
  <div>
    {{-- {{ !!$review->body!! }} --}}
  </div>
  <hr>
  
  <small>Written on: {{ $review->created_at }} 
      by {{ $review->user->name }}
    </small>
    <hr>
    
    {{-- @if(!Auth::guest())
      @if(Auth::user()->id == $review->user_id) --}}
        <a href="/reviews/{{$review->id}}/edit" class="btn btn-default">Edit</a>

        <form action="{{ action('ReviewController@destroy', [$review->id])}}" method="post" class="pull-right">
          @csrf
        
        </form>
      {{-- @else 
      <p>No reviews submitted</p>
      @endif
    @endif --}}

      <a href="/reviews/{{$review->id}}"><h3>{{$review->id}}</h3></>
      
      <small>Updated on: {{ $review->updated_at }}</small>
@endsection
