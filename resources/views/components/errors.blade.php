<?php
    /**
     * errors.blade.php is a default bootstrap alert if any errors arise
     *
     */

?>

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class ='alert alert-danger'>
            {{$error}}
        </div>                
    @endforeach
@endif

@if(session('success'))
    <div class = 'alert alert-success'>
        {{session('success')}}
    </div>   
@endif

@if(session('error'))
    <div class = 'alert alert-danger'>
        {{session('error')}}
    </div>   
@endif