@extends('layouts.master');


<form  method="post" action="{{ action('PostsController@update') }}">
    {!! csrf_field() !!}

    Title:<input type="text" name="title" value="{{ old('title') }}" placeholder="Title here">

    <input type="text" name="content" value="{{ old('content') }}" placeholder="Content here">

    <input type="text" name="url" value="{{ old('url') }}" placeholder="Url here">

    {{ method_field('PUT') }}
    <input type="submit" name="" value="Submit">

</form>

<form action="{{action('PostsController@destroy')}}" method="post">
    {!! csrf_field() !!}

    <button type="button" name="button">Delete</button>

    {{method_field('DELETE')}}
</form>
