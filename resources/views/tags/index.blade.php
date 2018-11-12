@extends('layouts.app')

@section('title', '| Filter Results')
@section('content')

  <div class="container">
    <div class="row">
      
      {{-- COMPONENT WITH STATES --}}
      <div id="filters-container" class="col">
        <form  method="get">
        <h1>Filter</h1>
          
        {{-- <div action="{{ action('TagController@postSearch')}}" method="post" class="form-group"> --}}      
        <button type="submit" class="btn btn-danger">RESET ALL</button>
        <button type="submit" class="btn btn-success">SEARCH</button>
          @csrf
              
        <ul  class="categories"> 
          @foreach($categories as $category)
            <li>
              <div class="filter-category-dropdowns">{{ $category->name }}</div>
            </li>
            <ul>
              @foreach($category->tags as $tag)
                <input type="checkbox" class="filter-checkboxes" name="{{ $tag->category->name }}" id="tag-{{ $tag->id }}" value="{{$tag->id}}" selected>{{ $tag->name }}</li>
                <br>
              @endforeach
            </ul>
          @endforeach
        </ul>
      </form> {{-- End of Form-Group --}}
      </div>
      <div id="filter-results" class="col">
        <h1>Your Results</h1>
      </div>  
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