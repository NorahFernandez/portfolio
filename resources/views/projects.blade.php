@extends('base')

    @section('content')

            <h1>My Projects</h1>
            <p>Here are some of my projects:</p>
            @foreach ($projects as $project)
                <div class="projects">
                    <h2>Title:{{$project->title}}</h2>
                    <p>{{$project->description}}</p>
                    @auth
                        @if(auth()->user()->id == 2)
                            <form action="">
                                <button>edit</button>
                            </form>
                        @endif
                    @endauth
                </div>
            @endforeach

    @endsection
