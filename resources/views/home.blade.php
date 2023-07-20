@extends('layouts.app')

@section('title', 'Welcome')

@section('main-content')
    <div class="jumbotron">
        
    </div>
    
    <div class="indicator">
        <h4>CURRENT SERIES</h4>
    </div>

    <div class="container">
    <div class="comic-container mt-5">
        @foreach ($comics as $comic)
        <article class="col-2">
            <div>
                <img src="{{ $comic['thumb'] }}" alt="$comic['title']'s Poster">
            </div>
            <div>
                <p>{{ $comic['title'] }}</p>
            </div>
        </article>
        @endforeach
    </div>
    <div class="call-to-action">
        <button>LOAD MORE</button>
    </div></div>
@endsection