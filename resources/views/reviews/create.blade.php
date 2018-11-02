@extends('layouts.app')


@section('title', '|Create a new post')
@section('stylesheet')

{{-- {{!! <Html::style('css/select2.min.css') !!}} --}}

@section('content')
  <h1>Create a post</h1>
  
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
        <label for="mood">How was the sociability?</label>
        <select name="attribute_id">

          @foreach ($attributes as $attribute)
          <option value="{{ $attribute->value }}">1</option>
          <option value="{{ $attribute->value }}">2</option>
          <option value="{{ $attribute->value }}">3</option>
          <option value="{{ $attribute->value }}">4</option>
          <option value="{{ $attribute->value }}">5</option>
          @endforeach
        </select>
    </div>
    {{-- LISTINGS OF ENERGY --}}
    <div class="form-group">
        <label for="energy">What was the energy like?</label>
        <select name="attribute_id">

          @foreach ($attributes as $attribute)
            <option value="{{ $attribute->value }}">1</option>
            <option value="{{ $attribute->value }}">2</option>
            <option value="{{ $attribute->value }}">3</option>
            <option value="{{ $attribute->value }}">4</option>
            <option value="{{ $attribute->value }}">5</option>
          @endforeach
        </select>
    </div>
    
    {{-- SUBMIT --}}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@section('scripts')
  {{-- {{ !! Html::script('js/select2.min.js') !!}} --}}
@endsection
@endsection
