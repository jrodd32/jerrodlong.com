@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="first_name">First Name</label>
                        <input class="form-control" type="text" name="first_name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="last_name">Last Name</label>
                        <input class="form-control" type="text" name="last_name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea class="form-control" name="message" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-submit">Contact Me</button>
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