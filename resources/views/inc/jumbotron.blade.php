<section class="jumbotron text-center" style = "background-color: #E1F5FE;">
    <div class="container">
        <h1 class="jumbotron-heading">Welcome, {{ Auth::user()->name }}!</h1>
        <p class="lead text-muted">“Every secret of a writer's soul, every experience of his life, every quality of<br/> his mind, is written large in his works.”</p>
        <p>
        <a href="posts/create" class="btn btn-primary my-2">Create a Blog Post</a>
        </p>
    </div>
</section>