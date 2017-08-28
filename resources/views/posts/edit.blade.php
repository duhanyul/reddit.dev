@extends('layouts.master')

@section('content')

<form  method="post" action="{{ action('PostsController@update',$post->id) }}">
    {!! csrf_field() !!}
    {!!$errors->first('title', '<span class="help-block">:message</span>')!!}
    <input class="form-control"type="text" name="title" value="{{ $post->title }}" placeholder="Title here">
    {!!$errors->first('content', '<span class="help-block">:message</span>')!!}
    <input class="form-control" type="text" name="content" value="{{ $post->content}}" placeholder="Content here">
    {!!$errors->first('url', '<span class="help-block">:message</span>')!!}
    <input class="form-control" type="text" name="url" value="{{ $post->url}}" placeholder="Url here">

    {{ method_field('PUT') }}
    <input type="submit" name="" value="Submit">

</form>

<form  method="post" action="{{action('PostsController@destroy',$post->id)}}">
    {!! csrf_field() !!}

    <button type="submit" name="button">Delete</button>
    {{method_field('DELETE')}}

</form>

@endsection
