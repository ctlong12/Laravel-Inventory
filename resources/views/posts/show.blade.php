@extends('layouts.app')

@section('content')
<div style = "margin-right: 150px; margin-left: 150px;">
    <h1 style = "margin-top: 75px;"> {{$post->title}}</h1>    
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small><br/><br/>
    <a href = "/posts" class = "btn btn-default">Go Back!</a> <a style = "margin-left: 15px;" href = "/posts/{{$post->id}}/edit" class = "btn btn-default">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], '_method' => 'POST', 'style' => 'float: right; margin-top: -5px;'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

    {!!Form::close()!!}
</div>
@endsection