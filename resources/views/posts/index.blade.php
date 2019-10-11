@extends('layouts.app')
@section('content')
@include('inc.jumbotron')

<main>   
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="col-md-6" style = "float: left">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <a class="text-dark" href="/posts/{{$post->id}}">{{$post->title}}</a>
                        </h3>
                        <div class="mb-1 text-muted">Written on {{$post->created_at}}</div>
                        <p class="card-text mb-auto"> {{$post->body}}</p>
                        <a href="/posts/{{$post->id}}">Continue reading</a>
                    </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="https://i.ibb.co/0YbXKLy/mountain.jpg" alt="Card image cap">
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-info" role="alert" style ="margin-top: 100px; margin-left: 150px; margin-right: 150px;" >
            <h4 class="alert-heading">Oops!</h4>
            <p>It looks like there are currently no blogs available, why not create one?</p>
            <hr>
            <p class="mb-0">To create a blog post, hit the button on the main screen!</p>
        </div>
    @endif
</main>
@endsection
