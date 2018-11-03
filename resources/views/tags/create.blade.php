@extends('layouts.app')

@section('title', '| Create a new tag')
<div class="container"> 

{{-- {{!! Form:: open(['action'=>'VenueController@store', 'method'=>'post']) !!}} --}}
<form action="{{ action('TagController@store')}}" method="post">

        @csrf
        
        <div class="form-group">
          {{-- {{ Form::label('title', 'Title') }} --}}
          <label>Name of Tag</label>
          {{-- {{ Form::text('title', '', ['class']) }} --}}
          <input type="text" name="name" class="form-control">
        </div>
        
        {{-- UNIQUE TAG CATEGORIES (VenueType, NighType)--}}
        <div class="form-group">
          <label>Category of the Tag</label> 
          {{-- CONNECT WITH CATEGORIES TABLE  --}}
          <select name="" id="">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>