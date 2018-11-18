@extends('layouts.app')

@section('title', '| views/filter/search')
@section('content')
{{-- PUt THE REACT APP: into Views/Layouts/app --}}


  {{-- INCLUDING: the REACT "App class Render()"  here  --}}
  <div id="app">
      {{-- @include('partials._navbar') --}}
      {{-- IF INCLUDED: before indes.jsx load cna see 2 Navbars for  sec --}}
  </div>



{{-- WILL LOAD: require(''./bootstrap') ('.components/index.jsx') --}}
<script src="{{ asset('js/app.js') }}"></script>

{{-- Bootsrap.js / npm installs--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


@endsection