@extends('_master')

@section('title')
  Welcome
@stop

@section('content')
  <h1>Welcome to Project 3!</h1>
  <h2>{{ HTML::linkRoute('lorem-ipsum', 'Lorem-ipsum') }}</h2>
  <h2>{{ HTML::linkRoute('user-generator', 'Random User Generator (with a political twist)') }}</h2>

@stop
