@extends('layouts.app')

@section('title', '| Home Page')
@section('content')

    <div id="intro" class="view">
        <div class="full-bg-img">
        {{-- <div class="jumbotron text-center"> --}}
            {{-- <div class="bubble-home-welcome"> --}}
            <div class="row d-flex align-items-center text-center div-home-intro">
                <div class="col-sm-10 col-md-8 col-lg-6 text-left div-home-welcome">
                    <h2 class="px-2"> Welcome to <br><span id="name" class="name"><strong>eVenture!</strong></span></h2>
                    <br/>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-6 div-home-tired">
                    <h3 class="py-1"><strong> TIRED of </strong>browsing <br/> for <br/><strong><ins>HOURS</ins> </strong><br>
                    ...to find a venue <br/> ...which <br/><strong><ins>SUITES ALL</ins></strong> your needs ??</h3>
                <div>
                <div class="col-sm-10 col-md-8 col-lg-6 offset-lg-5 div-home-filter">
                    <h3 id="hell-out" class="typer" data-wait="2000" data-words='["Use Our Tag System to Filter the Hell Out of Your Night Out!!"]'></h3>
                </div>
            {{-- </div> --}}
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

@endsection

<script src="js/typer.js"></script>