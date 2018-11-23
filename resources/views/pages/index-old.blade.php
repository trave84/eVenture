@extends('layouts.app')

@section('title', '| Home Page')
@section('content')

    {{-- <div id="intro" class="view">
        <div class="full-bg-img">Monkey should be here...</div>
    </div> --}}

    {{-- d-flex align-items-center  --}}

    <div class="jumbotron text-center">
        {{-- <div class="bubble-home-welcome"> --}}
        <div class="rowdiv-home-intro">
            <div class="col-sm-10 col-md-8 col-lg-6 div-home-welcome">
                <h1 > Welcome to <br><span class="name"><strong class="text-primary">eVenture!</strong></span></h1>
                <br/>
            </div>
            <div class="col-sm-10 col-md-8 col-lg-6 div-home-tired">
                <h2 class="h3-home-tired"><strong> TIRED of </strong>browsing... <br/> for <strong>HOURS </strong><br>
                to find a venue which <br><strong>suites all</strong> your needs ??</h2><hr/>
            <div>
            <div class="col-sm-10 col-md-8 col-lg-6 div-home-filter">
                <h2 class="typer" data-wait="2000" data-words='["Use Our Tag System to Filter the Hell Out of Your Night Out!!"]'></h2>
            </div>
        </div>
    {{-- </div> --}}

    {{-- <div class="bubble-home-tired">
        <h1 class="lead">Tired of Browsing for Hours... and Reading Comments?</h1>
    </div>
    
    <hr class="my-4">
    <div class="bubble-home-hell">
        <h1 class="lead">Just Go by Tags and Filter the Hell Out of Your Night Out! </h1>
    </div> --}}

    {{-- <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Create a New Account</a> --}}
    </div>
@endsection
