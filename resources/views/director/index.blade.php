@extends('director.layout', [
    'title' => 'index'
])

@section('content')

<h1>Directors</h1>

<ul>
    @foreach ($directors as $director)
        <li>
            Name: {{$director->name}} <br>
            Age: {{$director->age}}<br>
            Genres: {{$director->genres}}
            <a href="{{ action('DirectorController@edit', $director->id) }}">Edit</a>
        </li>
        <br> 
    
        
    @endforeach
</ul>
    





    
@endsection