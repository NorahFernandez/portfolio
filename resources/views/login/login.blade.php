@extends('base')

    @section('content')
        <h1>Login</h1>
        <p>Please login to access the dashboard</p>

        <form action="">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <button type="submit">Login</button>
        </form>

        <p>no acount? make one</p>
        <a href="/register">go</a>
    @endsection
