@extends('layouts.app')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <body>
 

    <!--Navigation Bar-->
    <div class="nav">
        <div class="col" align="center" style="background-color:lavender;"><a href="signin.html">Sign Out</a>
        </div>
        <div class="col" align="center" style="background-color:lavender;"><a href="{{ route('article') }}">Add an
                article</a></div>
        <div class="col" align="center" style="background-color:lavender;"><a href="aboutus.html">About us</a>
        </div>
    </div>
    <!--Main Title-->
    <div class="container.fluid p-3 my-3 bg-dark text-white">
        <h1 class="display-2" align="center">Techno Times Main Page</h1><br>
        <h1 class="display-4" align="center">By Team R1</h1>
    </div>
    <div class="row">
        <div class="col">
            <article id="0">
                <h1 class="display-5" align="center">Article 1</h1>
                <p align="center">Article 1 text</p>
            </article>
        </div>
        <div class="col">
            <article id="1">
                <h1 class="display-5" align="center">Article 2</h1>
                <p align="center">Article 2 text</p>
            </article>
        </div>

    </div>
@endsection
