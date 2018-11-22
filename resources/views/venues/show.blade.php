@extends('layouts.app')
  

@section('title', '|')
@section('content')
{{-- <div class="container"> --}}
  <section class="header jumbotron py-3 mb-0">
    <h1 class="page-header text-center">{{ $venue->name }} </h1>
    <div class="tags-list text-center px-2">
      
      {{-- DB DATA SHOULD LIST HERE: --}}
      @if (isset($tags_by_cat[$venue->id][2]))
        <i class="fas fa-cocktail"> </i> <span>
          @foreach ($tags_by_cat[$venue->id][2]  as $tag)
            {{ $tag->name }}
          @endforeach 
        </span>
      @endif
      <br/>
      @if (isset($tags_by_cat[$venue->id][5]))
        <i class="fas fa-compass"> </i> <span>
          @foreach ($tags_by_cat[$venue->id][5]  as $tag)
            {{ $tag->name }} 
          @endforeach 
        </span>
      @endif
      <br/>
      @if (isset($tags_by_cat[$venue->id][3]))
        <i class="fas fa-spinner"> </i> <span>
          @foreach ($tags_by_cat[$venue->id][3]  as $tag)
            {{ $tag->name }} 
          @endforeach 
        </span>
      @endif
      <br/>
      @if (isset($tags_by_cat[$venue->id][4]))
        <i class="fas fa-grin-tongue"> </i> <span>
          @foreach ($tags_by_cat[$venue->id][4]  as $tag)
            {{ $tag->name }} 
          @endforeach 
        </span>
      @endif
      <br/>
      @if (isset($tags_by_cat[$venue->id][8]))
        <i class="fas fa-dollar-sign"> </i> <span>
          @foreach ($tags_by_cat[$venue->id][8]  as $tag)
            {{ $tag->name }} 
          @endforeach 
        </span>
      @endif
      <br/>
      @if (isset($tags_by_cat[$venue->id][9]))
        <i class="fas fa-music"> </i> <span>
          @foreach ($tags_by_cat[$venue->id][9]  as $tag)
            {{ $tag->name }} 
          @endforeach 
        </span>
      @endif
      <br/>
      @if (isset($tags_by_cat[$venue->id][10]))
        <i class="fas fa-utensils"> </i> <span>
          @foreach ($tags_by_cat[$venue->id][10]  as $tag)
            {{ $tag->name }} 
          @endforeach 
        </span>
      @endif
      <br/>

    </div>
  </section>
  
  <section class="row">
    <button class="btn-back-show btn-block btn-primary col-lg-8" onclick="goBack()">Get Back to Your Results
      {{-- {!! link_to(URL::previous(), ' Get Back to Search Results', ['class' => 'btn btn-primary']) !!} --}}
    </button>
    {{-- <div class="venue-show col-md-9"> --}}
      <div class="card px-0 py-0  col-md-8 card-show">
        <div class="card-title card-tags card-show-title">
          {{-- <p class="card-title ">Location: {{ $venue->tags-> }}</p>
          <p class="card-title ">Venue Type: {{ $venue->venuetype }}</p> --}}
        </div>
        {{-- <img class="card-img-top img-fluid" src="{{URL::asset('/images/sample_banner.jpg')}}"  alt="asset_image"> --}}
        <img class="card-img-top img-fluid card-show-img" src="{{$venue->banner_img}}"  alt="$venue->banner_img">
        <p>{{$venue->banner_img}}"</p>
        <div class="card-title card-tags card-show-title">
          {{-- <i class="fas fa-dollar sign"></i> <p class="card-title ">{{ $venue->budget }}</p>
          <p class="card-title ">Night Type: {{ $venue->nighttype }}</p> --}}
        </div>
        <div class="card-body  text-justify card-show-body">
          <p class="card-text card-show-text">{{ $venue->description }}</p> 
          <a  href="{{ $venue->link  }}" target="_blank" class="btn btn-primary card-show-btn-website">Website</a>
        </div>
      </div>
    {{-- </div> --}}

    <div class="sidebar-show col-md-4">
        <blockquote class="blockquote sidebar-blockquote-show">
          <p>Tripadvisor comments</p>
          <blockquote class=""><cite title="John Doe">John Doe</cite></footer>
        </blockquote>
        <div class="clearfix"></div>
        <hr />
        {{-- <blockquote class="blockquote-reverse">
          <p>Photos</p>
        </blockquote>
        <div class="clearfix"></div>
        <hr /> --}}
    </div>
  </section>
{{-- </div> --}}
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>