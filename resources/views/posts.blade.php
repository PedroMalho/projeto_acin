@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col"></div>
            <div class="col-12">
                <h1>{{$post->title}}</h1>
            </div>
            <div class="col"></div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-11"><h3>{{$post->body}}</h3></div>
        <div class="col"></div>
    </div>
</div>    

@endsection
