@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/project" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name">
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
                        <label for="description">Description</label>
                        <textarea class="form-control" type="text" name="description" rows="10"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="phase_id">Phase</label>
                        <select name="phase_id" id="">
                        @foreach($phases as $phase)
                            <option value="{{ $loop->index + 1 }}">{{ ucfirst($phase) }}</option>
                        @endforeach
                        </select>
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
                        <button type="submit" class="btn btn-submit">Publish Project</button>
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