@extends('layouts.app')
@section('content')
  <div class="venue">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src=".../100px180/" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ $venue->name }}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Check out</a>
      </div>
    </div>
  </div>
@endsection