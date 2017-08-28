@extends('layouts.master')

@section('title')
    <title>Create</title>
@endsection

@section('content')
    
    <form  method="post" action="{{ action('PostsController@store') }}">
        {!! csrf_field() !!}

        <input type="text" name="title" value="{{ old('title') }}" placeholder="Title here">

        <input type="text" name="content" value="{{ old('content') }}" placeholder="Content here">

        <input type="text" name="url" value="{{ old('url') }}" placeholder="Url here">

        <input type="submit" name="" value="Submit">

    </form>
@endsection
