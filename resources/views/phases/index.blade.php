@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Phases</h1>
            <hr>
            @foreach($phases as $phase)
                <article class="phase">
                    <h2><a href="/phase/{{ $phase->id }}">{{ $phase->name }}</a></h2>
                    <p>{{ $phase->description }}</p>
                </article>
            @endforeach
        </div>
    </div>
</div>
@endsection