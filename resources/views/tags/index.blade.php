@extends('layouts.app')

@section('title', '| Filter Results')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <h1>Filter</h1>


      {{-- <div action="{{ action('TagController@postSearch')}}" method="post" class="form-group"> --}}

      <button type="submit" class="btn btn-danger">RESET ALL</button>
      <button type="submit" class="btn btn-success">SEARCH</button>
        @csrf
        <div class="row">
          <ul  class="col-6 col-md-4"> 
            @foreach($categories as $category)
              <li>
                <div class="filter-category-dropdowns">{{ $category->name }}</div>
              </li>
              <ul>
                <!-- public function tags() -->
                @foreach($category->tags as $tag)
                  <input type="checkbox" class="filter-checkboxes">{{ $tag->name }}</li>
                  <br>
                @endforeach
              </ul>
            @endforeach
          </ul>
        </div>
      </div> {{-- End of Form-Group --}}

    </div>
  </div>
@endsection