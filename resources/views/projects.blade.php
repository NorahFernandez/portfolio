@extends('base')

    @section('content')

        <div>
            <h1>My Projects</h1>
            <p>Here are some of my projects:</p>
            @foreach ($projects as $project)
                <div class="projects">
                    <h2>Title:{{$project->title}}</h2>
                    <p>{{$project->description}}</p>
                </div>
            @endforeach
        </div>

    @endsection
