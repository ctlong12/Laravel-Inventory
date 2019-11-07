<?php
    /**
     * index.blade.php is the welcome page to our application, this page
     * is controlled by the PagesController and is only displayed when a
     * user is not authenticated.
     *
     * NOTE: CREATED WITH BOOTSTRAP
     * 
     */

?>


@extends('layouts.app')

@section('content')
<div class="jumbotron text-center"> 
    <h1>Welcome to the Inventory Tracker!</h1> 
    <p>Go ahead and create an account and keep track of your stuff! : )</p> 
</div>
@endsection