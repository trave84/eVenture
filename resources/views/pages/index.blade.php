@extends('layouts.app')

@section('title', '| Index')
@section('content')

<div class="jumbotron">
    <h1 class="display-4">Welcome to eVenture!</h1>
    <p class="lead">Find bars, clubs, restaurants based on your mood and energy level for the day</p>
    <hr class="my-4">
    <p>Register and sign in to have the most functionalities and features available to you.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Create a New Account</a>
</div>

@endsection