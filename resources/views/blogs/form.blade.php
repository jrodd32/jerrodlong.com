@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/blog" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="excerpt">Excerpt</label>
                        <textarea class="form-control" type="text" name="excerpt" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="body">Body</label>
                        <textarea class="form-control" type="text" name="body" rows="10"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <p>Tags</p>
                        @foreach($tags as $tag)
                            <label for="{{ $tag }}">{{ $tag }}: <input id="{{ $tag }}" type="checkbox" name="tags[]" value="{{ $loop->index + 1 }}">&nbsp;</label>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-submit">Publish Blog</button>
                    </div>
                </div>
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