@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
                <div class="col"></div>
                <div class="col-10">
                        <h1 class="title m-b-md">Welcome To My Blog</h1>  
                </div>
                <div class="col"></div>
        </div>
        @guest
        <div class="row">
                <div class="col"></div>
                <div class="col-10">
                        <h4 >To interact and comment please use the register button.</h4>
                </div>
                <div class="col"></div>
        </div>
        @endguest
        
        &nbsp;<br>
        &nbsp;
        <div class="col"> 
                <h4>Latest Entries</h4> 
        </div>
        <div class="row">
                <table class="table table-striped">
                        <thead class="thead-light">
                                <tr>
                                        <th scope="col">Likes</th>
                                        <th scope="col">Post Title</th>
                                        <th scope="col">Published At</th>
                                        @auth
                                        @if (Auth::user()->is_admin == 1)
                                        <th scope="col">Actions</th>
                                        @endif
                                        @endauth
                                        
                                </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                                <tr>
                                        <th>{{$post->likes}}</th>
                                        <td><a href="/post/{{$post->id}}">{{$post->title}}</a></td>
                                        <td>{{$post->created_at}}</td>
                                        @auth
                                        @if (Auth::user()->is_admin == 1)
                                        <td scope="col">
                                        <a class="btn btn-success" href="/post/{{$post->id}}/edit" role="button">Edit</a>

                                        <form method="POST" action="/post/{{$post->id}}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>

                                        </td>
                                        @endif   
                                        @endauth

                                </tr>
                        @endforeach
                        </tbody>
                        </table>
        </div>
        {{ $posts->links() }}
 </div>       
@endsection
