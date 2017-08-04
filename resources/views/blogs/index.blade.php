@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Changelog</h1>
            <hr>
            @foreach($blogs as $blog)
                <article class="blog">
                    <h2>{{ $blog->title }}</h2>
                    {{ $blog->body }}

                    <div class="tags">
                    @if($blog->tags)
                        Tagged:
                        @foreach($blog->tags as $tag)
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