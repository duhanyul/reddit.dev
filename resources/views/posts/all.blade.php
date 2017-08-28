@extends('layouts.master')

@section('title')
    <title>All</title>
@endsection

@section('content')
    @foreach ($posts as $post)
        <h1>{{$post->title}}</h1>
        <h2>{{$post->content}}</h2>
        <h3>{{$post->url}}</h3>
        <h4>{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y')}}</h4>
        <a href="{{action('PostsController@show',array($post->id))}}">Post {{$post->id}}</a>
    @endforeach
    {!! $posts->render() !!}
@endsection
