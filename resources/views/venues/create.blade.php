@extends('layouts/app')
@section('content')
<h1>Create a Venue</h1>

<div class="container"> 

{{-- {{!! Form:: open(['action'=>'VenueController@store', 'method'=>'post']) !!}} --}}
<form action="{{ action('VenueController@store')}}" method="post">

        @csrf
        
        <div class="form-group">
          {{-- {{ Form::label('title', 'Title') }} --}}
          <label>Name of Venue</label>
          
          {{-- {{ Form::text('title', '', ['class']) }} --}}
          <input type="text" name="name" class="form-control">
        </div>
        
        <div class="form-group">
          <label>Location</label>
          <input type="text" name="location" class="form-control">
        </div>

        <div class="form-group">
          <label>Features</label>
            @foreach ($features as $feature)
            <input type="checkbox" name="{{ $feature->id }}" value="Bike">{{ $feature->name }}
            @endforeach

        </div>

        {{-- <div class="form-group">
          <label>Features</label>
          <select name="feature_id">
            @foreach ($features as $feature)
            <option value="{{ $feature->id }}">{{ $feature->name }}</option>
            @endforeach            
          </select>
        </div> --}}

        <div class="form-group">
          <label>Attributes</label>
          <select name="attribute_id">
           
            @foreach ($attributes as $attribute)
            <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
            @endforeach
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection