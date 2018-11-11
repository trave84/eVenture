@extends('layouts.app')

@section('title', '| Filter Results')
@section('content')
  <div class="row">
    <div id="filter-results" class="col-sm-8">
        <h1>Your Results</h1>
    </div>
    {{-- COMPONENT WITH STATES --}}
    <div id="filters-container" class="col-sm-4">
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
              <input type="checkbox" class="filter-checkboxes" name="tag-{{ $tag->id }}" id="tag-{{ $tag->id }}" value="{{$tag->id}}" selected>{{ $tag->name }}</li>
                  <br>
                @endforeach
              </ul>
            @endforeach
          </ul>
        </div>
      </div> {{-- End of Form-Group --}}

    </div>
  </div>

<script>

  let input = document.getElementById('filter-results');  //COMPONENT
  input.addEventListener('change', () => {        // onCHANGE
      fetch('/venue/?s=' + encodeURIComponent(input.value), { // ?????
          method: 'GET'
      })
      .then((response) => {
          return response.json();
      })
      .then((json) => {
          let container = document.querySelector('.results');
          container.innerHTML = '';

          json.forEach((item) => {

              let div = document.createElement('div');
              div.innerHTML = item.fullname;
              container.appendChild(div);
          });
          console.log(json);
      });
  });
</script>

@endsection