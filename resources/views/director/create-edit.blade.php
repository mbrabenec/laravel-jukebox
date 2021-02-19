@extends('director.layout', [
    'title' => 'edit_create'
])

@section('content')

@if ($director->id)

    <h2>Edit Director</h1>
    <form action= {{ action('DirectorController@update', $director->id) }} method="post">
        @method('PUT')
 
@else

    <h2>New Director</h1>
    <form action= {{ action('DirectorController@store') }} method="post">
 
@endif

    @csrf

    <span>Name</span>
    <input type="text" name="name" value="{{ old('name', $director->name) }}">

    <span>Age</span>
    <input type="text" name="age" value="{{ old('age', $director->age) }}">

    <span>Genre ID</span>
    <input type="text" name="genre_id" value="{{ old('genre_id', $director->genre_id) }}">

    <button type="submit">Submit</button>

</form>

    





    
@endsection