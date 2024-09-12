@extends('base')

    @section('content')
        <h1>Login</h1>
        <p>Please login to access the dashboard</p>

        <form method="POST" action="{{route('login')}}">
            @csrf
            <input type="email" name="email" required autofocus>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    @endsection
