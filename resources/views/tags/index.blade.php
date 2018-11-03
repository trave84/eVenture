@extends('layouts.app')

@section('title', '| Tags')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <h1>Tags</h1>
        <div class="row">
          <ul  class="col-6 col-md-4"> 
          @foreach($categories as $category)
            <li>
              <button id="btn-categories">{{ $category->name }}</button>
            </li>
            <ul>
             <!-- public function tags() -->
              @foreach($category->tags as $tag)
                <li class="tags-admin">{{ $tag->name }}</li>
              @endforeach
            </ul>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection