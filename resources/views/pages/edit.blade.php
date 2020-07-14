@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.css">
@endsection

@section('content')
<div class="container">
    <div class="row">
            <div class="col"></div>
            <div class="col-10">
                    <h1 class="heading has-text-weight-bold is-size-4">Edit blog entry</h1>  
            </div>
            <div class="col"></div>
    </div>
    &nbsp;
    <div class="row">
        <div class="col"></div>
        <div class="col-10">
                <form method="POST" action="/post/{{$post->id}}">
                    @csrf
                    @method('PUT')
                    
                    <div class="field">
                        <label class="label" for="title">Title</label>
                    
                        <div class="control">
                            <input class="input" type="text" name="title" id="title" value="{{$post->title}}">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="body">Body</label>
                    
                        <div class="control">
                            <textarea class="textarea" name="body" id="body" cols="30" rows="10">{{$post->body}}</textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Submit</button>
                        </div>
                    </div>
                </form> 
        </div>
        <div class="col"></div>
</div>
</div>       
@endsection