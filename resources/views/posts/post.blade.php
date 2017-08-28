@extends('layouts.master')

@section('title')
    <title>Post {{$post->id}}</title>
@endsection

@section('content')

    <h1>{{$post->title}}</h1>
    <h2>{{$post->content}}</h2>
    <h3>{{$post->url}}</h3>

@endsection
