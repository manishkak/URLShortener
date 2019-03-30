@extends('url.layout')

@section('content')
<h1>URL Shortener</h1>
    @if($errors->has('url'))
        <p class="errors">{{ $errors->first('url') }}</p>
    @endif

    <form action="{{ url('/short') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group narrow col-lg-4">
                <label for="url">Enter URL below:</label>
                <input type="text" name="url" class="form-control" id="url">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" id="submitbtn" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection