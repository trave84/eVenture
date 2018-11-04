@extends('layouts.app')

@section('title', '| Create a Venue')
@section('content')
  <div class="row"> 
    <div class="col-md-8">
      <h1>Create a New Venue</h1>
      <hr>
      {{-- {{!! Form:: open(['action'=>'VenueController@store', 'method'=>'post']) !!}} --}}
      <form action="{{ action('VenueController@store')}}" method="post">

              @csrf
              
              <div class="form-group">
                {{-- {{ Form::label('name', 'Name of Venue: ') }} --}}
                <label for="name">Name of Venue</label>
                
                {{-- {{ Form::text('name', null, array('class' => 'form-control')) }} --}}
                <input type="text" name="name" value="" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" value="" class="form-control">
              </div>

              <div class="form-group">
                <label for="features">Features</label>
                <br>
                  @foreach ($features as $feature)
              <input type="checkbox" name="{{ $feature->id }}" class="form-control" value="">{{ $feature->name }}
                  @endforeach
              </div>
              
              <h5>Moodifier</h5>
              <div class="form-group">
                  <label for="">Romantic(1) to Social(10)</label>
                  <br>

                  <select name="attribute_id" class="form-control">
                    @foreach  ($attributes as $attribute)
                      <option value="{{ $attribute->value }}">1</option>
                      <option value="{{ $attribute->value }}">2</option>
                      <option value="{{ $attribute->value }}">3</option>
                    @endforeach
                  </select>
                </div>
                
              <div class="form-group">
                  <label for="description">Describe your Venue: </label>
                  <input type="textarea" name="description" value="" class="form-control">
              </div>
      
              {{-- <div class="form-group">
                <label>Features</label>
                <select name="feature_id">
                  @foreach ($features as $feature)
                  <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                  @endforeach            
                </select>
              </div> --}}

              {{-- {{ Form::submit('Submit', array('class' => 'btn btn-success btn-larg btn-block')) }} --}}
              <button type="submit" class="btn btn-success btn-larg btn-block">Submit</button>
      {{-- {{!! Form::close() !! }} --}}
      </form>
    </div>
  </div>
@endsection