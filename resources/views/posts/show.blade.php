@extends('layouts.app')


@section('content')
    <div class="float-right">
        <a href="/posts" class="btn btn-outline-primary">Go back to blogs</a>
    </div>
    
    <h1>{{$post->title}}</h1>
    <img class="img-thumbnail" style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div class="row">
                <div class="col-sm-1">
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                </div>
                <div class="col-sm-1">
                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </div>
            </div>    
        @endif
    @endif
@endsection