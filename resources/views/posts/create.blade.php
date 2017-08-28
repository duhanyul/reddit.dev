@extends('layouts.master')

@section('title')
    <title>Create</title>
@endsection

@section('content')

    <form  method="post" action="{{ action('PostsController@store') }}">
        {!! csrf_field() !!}
        {!!$errors->first('title', '<span class="help-block">:message</span>')!!}
        <input type="text" name="title" value="{{ old('title') }}" placeholder="Title here">
        {!!$errors->first('content', '<span class="help-block">:message</span>')!!}
        <input type="text" name="content" value="{{ old('content') }}" placeholder="Content here">
        {!!$errors->first('url', '<span class="help-block">:message</span>')!!}
        <input type="text" name="url" value="{{ old('url') }}" placeholder="Url here">

        <input type="submit" name="" value="Submit">

    </form>
@endsection
