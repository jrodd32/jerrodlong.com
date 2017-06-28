@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Changelog</h1>
            <hr>
            @foreach($blogs as $blog)
                <h2>{{ $blog->title }}</h2>
                {{ $blog->body }}
            @endforeach
        </div>
    </div>
</div>
@endsection