@extends('layouts.app')

@section('content')

    <!-- Home Introduction -->
    <h1 class="border-bottom"><strong>Home</strong></h1>
    <p>Haskell Solutions was created by James E. Haskell, a young entrepeneur and computer scientist with the dream of solving the world's many problems.
    This company was designed to provide and increase efficiency, productivity, and stability for our clients. Please visit our <a href="/about">
    <strong>About</strong></a> page to see some of our work!</p>

@endsection

@section('sidebar')
    @parent
    <div class="d-flex flex-column align-items-center">
        <p>This is appended to the sidebar</p>
    </div>
@endsection