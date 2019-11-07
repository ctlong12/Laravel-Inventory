<!DOCTYPE html>

@extends('layouts.app')
@section('content')
<div style = "margin-right: 200px; margin-left: 200px;">
    <h1 style = "margin-top: 50px;">Create Item</h1>
        {!! Form::open(['action' => 'AssetsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Item Name'])}}
        </div>
          <div class="form-group">
             {{Form::label('description', 'Description')}}
             {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
          </div>
            Date Purchased: <br><input type="date" name="purchased"><br/><br/>
          <div class="form-group">
                Owner:
            <select name="person_id" id="person_id" class="form-control">
                @foreach($people as $person)
                <option type="text" value="{{$person->id}}">{{$person->fname}} {{$person->lname}}</option>
                @endforeach
            </select>    
            </div>  
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!} 
</div>
@endsection
