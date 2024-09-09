@extends('base')

    @section('content')

        <h1>Create Account</h1>
        <p>Please create an account to access the dashboard</p>

        <form action="">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
            <button type="submit">Create Account</button>
        </form>

    @endsection
