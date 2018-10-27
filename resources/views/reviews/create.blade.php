@extends('layouts.app')
@section('content')
  <h1>Create post</h1>
  
  <form action="{{action('ReviewController@store')}}" method="post">
    {{-- PROTECTION --}}
    @csrf

    {{-- FILL IN --}}
    <div class="form-group">
      <label for="title">Title of your review</label>
      <input type="text" name="title" class="form=control">
    </div>

    <div class="form-group">
      <label for="body">Your comments</label>
      <input type="text" name="body"  class="form-control">
    </div>

    {{-- LISTINGS OF MOOD --}}
    <div class="form-group">
        <label for="mood">attribute of the venue</label>
        <select name="attribute_id">

          @foreach ($attributes as $attribute)
          <option value="{{ $attribute->id }}">{{ $attribute->value }}</option>
          @endforeach
        </select>
    </div>
    {{-- LISTINGS OF ENERGY --}}
    <div class="form-group">
        <label for="energy">Energy of the venue</label>
        <select name="attribute_id">

          @foreach ($attributes as $attribute)
          <option value="{{ $attribute->id }}">{{ $attribute->value }}</option>
          @endforeach
        </select>
    </div>
    
    {{-- SUBMIT --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
