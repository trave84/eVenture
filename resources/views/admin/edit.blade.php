@extends('layouts/app')
@section('content')


<div class="container"> 

        <form action="{{action('VenueController@update', [$venue->id])}}" method="post">
        
                @csrf
        
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" value="{{ old('title', $venue->title) }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>Authors</label>
                  <input type="text" name="authors" value="{{ old('author', $venue->authors) }}"class="form-control">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="text" name="image" value="{{ old('image', $venue->image) }} "class="form-control">
                </div>
                <div class="form-group">
                  <label>attribute</label>
                  <select name="attribute_id">
                  
                    @foreach ($attributes as $attribute)
                    <option value="{{ $attribute->id }}" @if ($venue->attribute_id == $attribute->id) selected @endif >
                    {{ $attribute->name }}
                    </option>
                    @endforeach
                </select>
                <div class="form-group">
                  <label>feature</label>
                  <select name="feature_id">
                  
                    @foreach ($features as $feature)
                    <option value="{{ $feature->id }}" @if ($venue->feature_id == $feature->id) selected @endif >
                    {{ $feature->name }}
                    </option>
                    @endforeach
                  </select>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
       


@endsection