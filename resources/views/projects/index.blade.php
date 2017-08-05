@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Projects</h1>
            <hr>
            @foreach($projects as $project)
                <article class="project">
                    <h2>{{ $project->name }}</h2>
                    <sub title="{{ $project->phase->description }}">Phase: {{ $project->phase->name }}</sub>
                    <p>{{ $project->excerpt }}</p>

                    <div class="tags">
                    @if($project->tags)
                        Tagged:
                        @foreach($project->tags as $tag)
                            <span>{{ $tag->name }}</span>
                        @endforeach
                    @endif
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</div>
@endsection