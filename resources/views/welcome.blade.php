@extends('base')

    @section('content')
        <h1>Welcome to my portfolio</h1>
        <p>my name jjagdjjkfkddskskj</p>

        <h2>about me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Laboriosam enim inventore excepturi? Incidunt, neque consequatur. Blanditiis recusandae soluta magni cupiditate quidem,
            libero velit voluptatem consectetur aperiam fugit perspiciatis porro laboriosam?</p>

        <h2>My Projects</h2>

        {{-- link to projects --}}
        <div class="toProjects">
            <a href="/projects">
            <img src="/images/2023-11-14_10.42.24.png" alt="">
            <p>to my projects</p>
            </a>
        </div>

        @auth
            @if(auth()->user()->id == 2)
                <h1>:D</h1>
            @endif
        @endauth

        <a href="/register">go</a>

    @endsection

