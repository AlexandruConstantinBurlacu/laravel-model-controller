@extends('layouts/app')

@section('content')

<div class="container">
    <h1>
        Lista Film
    </h1>

    @dump($movies)
    <ul>
        @foreach ($movies as $movie)
            <li>
                <h1>
                    {{$movie->title}}
                </h1> 
            </li>
            
        @endforeach
    </ul>
    
</div>

@endsection