@extends('layouts.master')
@section('title')
    <title>Roll the Dice</title>
@endsection

@section('content')
        <h1>Hey You rolled some die</h1>
        <h2>lets see what you guessed</h2>
        <h3>Looks like a {{ $guess }}</h3>
        @if($guess == $number)
            <h4>You rolled the lucky magic number</h4>
        @else
            <h4>No dice Friendo</h4>
        @endif
@endsection
