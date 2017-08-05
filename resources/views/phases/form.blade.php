@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/phase/{{ !empty($phase->id) ? $phase->id : '' }}" method="post">
                {{ csrf_field() }}

                @if (!empty($phase->id))
                    {{ method_field('put') }}
                    <input type="hidden" name="id" value="{{ $phase->id }}">
                @endif

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ !empty($phase->name) ? $phase->name : '' }}">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea class="form-control" type="text" name="description" rows="5">{{ !empty($phase->description) ? $phase->description : '' }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-submit">{{ empty($phase->id) ? 'Publish' : 'Update' }} Phase</button>
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