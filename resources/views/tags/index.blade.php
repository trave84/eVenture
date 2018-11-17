@extends('layouts.app')

@section('title', '| views/tags/index')
@section('content')
  
<div class="container">
    <div class="row">
      
      {{-- COMPONENT WITH STATES --}}
      <div class="filters-container"  class="col-2 col-md-12">
        <form  method="get">
        <h1>Filter</h1>
          
        {{-- <div action="{{ action('TagController@postSearch')}}" method="post" class="form-group"> --}}      
        <button type="submit" class="btn btn-danger btn-sm">RESET ALL</button>
        <button type="submit" onSubmit=""  class="btn btn-success btn-sm">SEARCH</button>
          @csrf
              
        <div  class="filter-list"> 
          @foreach($categories as $category)
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse"{category.name} aria-expanded="false" aria-controls="collapse"{category.name}>{{ $category->name }}
            </button>

          {{-- FilterItem --}}
          <div classs="filter-list-items">
            <div class="collapse" id="collapse"{}>
              <div class="card card-body">
            
                @foreach($category->tags as $tag)
                  <input type="checkbox" class="filter-checkboxes" name="{{ $tag->category->name }}" id="tag-{{ $tag->id }}" value="{{$tag->id}}" selected>{{ $tag->name }}
                  {{--  <br> --}}
                @endforeach

              </div>
            </div>
          </div>  
          {{-- END OF FilterItem :'filter-list-items' --}}
          @endforeach
        </div>
      </form> {{-- End of Form-Group --}}
      </div>
      <div id="filter-results" class="col-10 col-md-12">
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