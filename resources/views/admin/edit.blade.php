@extends('layouts/app')
@section('content')


<div class="container"> 

        <form action="{{action('VenueController@update', [$venue->id])}}" method="post">
              @csrf
        
                <div class="form-group">
                  <label>Name of Venue</label>
                  <input type="text" name="title" value="{{ old('name', $venue->name) }}" class="form-control">
                </div>
  
                <div class="form-group">
                  <label>Location</label>
                  <input type="text" name="location" value="{{ old('author', $venue->location) }}"class="form-control">
                </div>
  
                <div class="form-group">
                  <label>Night Types</label>
                  <input type="text" name="night-type" value="{{ old('image', $venue->night_type) }} "class="form-control">
                </div>
  
                <div class="form-group">
                  <label>Attributes</label>
                  <select name="attribute_id">
                    @foreach ($attributes as $attribute)
                      <option value="{{ $attribute->id }}" @if ($venue->attribute_id == $attribute->id) selected @endif >
                    {{ $attribute->name }}
                    </option>
                    @endforeach
                </select>
  
                <div class="form-group">
                  <label>Features</label>
                  @foreach ($features as $feature)
                    <input type="checkbox" name="{{ $feature->id }}" value="Bike">{{ $feature->name }}
                  @endforeach
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
       


@endsection