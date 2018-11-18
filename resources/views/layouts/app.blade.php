<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('partials._head')
</head>
<body>
  <div id="app">
    
    @include('partials._navbar')
    {{-- @include('partials._navbar_TM') --}}

    <main >
      @yield('content')
    </main>

    @include('partials._footer')

  </div>
</body>
</html>
