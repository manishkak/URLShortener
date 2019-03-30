@extends('url.layout')

@section('content')
<div class="row">
    <h3>Shortened URL:</h3>
</div>
<div class="row">
    <a class="shortUrl" href="{{ url('/short/'. $url->short) }}" target="_blank"> {{ url('/short/'. $url->short) }} </a>
</div>
<br>
<div class="row">
    <a href="{{url('/short')}}" class="btn btn-default">Go Back</a>
</div>
@endsection