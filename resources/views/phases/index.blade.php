@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Phases</h1>
            <hr>
            @foreach($phases as $phase)
                <article class="phase">
                    <h2>{{ $phase->name }}</h2>
                    {{ $phase->description }}
                </article>
            @endforeach
        </div>
    </div>
</div>
@endsection