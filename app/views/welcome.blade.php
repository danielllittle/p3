@extends('_master')

@section('title')
  Welcome
@stop

@section('content')
  <h1>Welcome to Project 3!</h1>
  <h2>A Devloper's Best Friend</h2>
  <hr>
  <h3>{{ HTML::linkRoute('lorem-ipsum', 'Lorem-ipsum') }}</h3><i>A random paragraph content utility</i>
  <hr>
  <h3>{{ HTML::linkRoute('user-generator', 'Random User Generator (with a political twist)') }}</h3><i>A random user profile generator</i>

@stop
