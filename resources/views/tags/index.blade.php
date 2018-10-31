@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <h1>Tags</h1>
      <form name="filters-form">
        <ul>
          @foreach($tags as $tag)
            <li class="categories">
            <button id="btn-categories">{{ $tag->category }}</button>
            </li>
          @endforeach
        </ul>
        

        

      </div>
    </div>
  </div>
@endsection