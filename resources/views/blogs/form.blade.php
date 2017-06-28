@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/blog" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="excerpt">Excerpt</label>
                        <textarea class="form-control" type="text" name="excerpt"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="body">Body</label>
                        <textarea class="form-control" type="text" name="body"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-submit">Publish Blog</button>
            </form>
        </div>
    </div>
    <ul>

    @if (count($errors))
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

    </ul>
</div>
@endsection