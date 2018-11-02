@extends('layouts.app');
@section('content')
    <h1>Venues</h1>

    @foreach ($venues as $venue)
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ $venue->name }}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

        {{-- <a href="show/{{ $poll->id }}" class="card-link">Vote</a> --}}

        <a href="venues/edit/{{ $venue->id }}" class="btn btn-primary">Edit</a>
        <a href="venues/delete/{{ $venue->id }}" class="btn btn-primary">Delete</a>

      </div>
    </div>
    @endforeach
  </div>
@endsection