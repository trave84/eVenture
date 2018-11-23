@extends('layouts.app')

@section('title', '| Venues in Prague')
@section('content')
    
    <section class="header jumbotron">
      <h1 class="page-header"> Venues in Prague 
      </h1>
    </section>

    <section class="row  d-flex justify-content-around align-content-stretch flex-wrap section-index-venues">
      @foreach ($venues as $venue)
      {{-- INDIVIDUAL CARDS START HERE: --}}
        <div class="div-index-venue">       
          <div class="card my-2 card-index">
          <h3 class="card-title card-index-title"> {{ $venue->name}} </h3>
          <div class="card-title card-tags card-index-tags">
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
          </div>
          {{-- <img class="card-img-top" src="{{URL::asset('/images/sample_banner.jpg')}}" height="200" width="200" alt="$venue->banner_img"> --}}
          <img class="card-img-top card-index-img" src="{{$venue->banner_img}}" height="200" width="200" alt="$venue->banner_img">
          <div class="card-tags card-index-tags">
            {{-- @foreach ($times as $time)
              <p class="card-tag ">{{$time->days." ".$time->opening." ".$time->closing}} </p>    
              @endforeach --}}
          </div>
          <div class="card-body card-index-body">
            <p class="card-text text-justify card-index-text">{{ substr($venue->description, 0, 100) }} {{ strlen($venue->description) > 100 ? "..." : ""  }}</p> 
            {{-- <hr> --}}
            
            @if (isset($tags_by_cat[$venue->id][3]))
              <i class="fas fa-spinner"> </i> <span>
                @foreach ($tags_by_cat[$venue->id][3]  as $tag)
                  {{ $tag->name }} <i class="far fa-circle fa-xs"></i> 
                @endforeach 
              </span>
            @endif
            <br>
            {{-- <hr class="clearfix"> --}}

            @if (isset($tags_by_cat[$venue->id][4]))
              <i class="fas fa-grin-tongue"> </i> <span>
                @foreach ($tags_by_cat[$venue->id][4]  as $tag)
                  {{ $tag->name }} <i class="far fa-circle fa-xs"></i> 
                @endforeach 
              </span>
            @endif
            <br/>
            @if (isset($tags_by_cat[$venue->id][8]))
              <i class="fas fa-dollar-sign"> </i> <span>
                @foreach ($tags_by_cat[$venue->id][8]  as $tag)
                  {{ $tag->name }} <i class="far fa-circle fa-xs"></i> 
                @endforeach 
              </span>
            @endif
            <br/>
            @if (isset($tags_by_cat[$venue->id][9]))
              <i class="fas fa-music"> </i> <span>
                @foreach ($tags_by_cat[$venue->id][9]  as $tag)
                  {{ $tag->name }} <i class="far fa-circle fa-xs"></i> 
                @endforeach 
              </span>
            @endif
            <br/>
            @if (isset($tags_by_cat[$venue->id][10]))
              <i class="fas fa-utensils"> </i> <span>
                @foreach ($tags_by_cat[$venue->id][10]  as $tag)
                  {{ $tag->name }} <i class="far fa-circle fa-xs"></i> 
                @endforeach 
              </span>
            @endif
            <br/>

          {{-- <a href="show/{{ $poll->id }}" class="card-link">Vote</a> --}}

          {{-- WHEN SLUG IS DONE --}}
          {{-- <a href="{{ route('venues.single', $venue->slug) }}" class="btn btn-primary">Read More</a> --}}

          <a href="venues/show/{{ $venue->id }}" class="btn btn-primary btn-block card-index-btn-view">View</a>
          </div>
        </div>
      </div>
    @endforeach
  </section>

@endsection
