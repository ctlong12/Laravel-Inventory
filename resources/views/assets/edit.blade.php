<!DOCTYPE html>

@extends('layouts.app')
@section('content')

<div style = "margin-right: 200px; margin-left: 200px;">
    <h1 style = "margin-top: 50px;">Update Item</h1>
    {!! Form::open(['action' => ['AssetsController@update', $asset->id], 'method' => 'POST']) !!}        
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::textarea('name', $asset->name, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $asset->description, ['class' => 'form-control'])}}
        </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>

@endsection
