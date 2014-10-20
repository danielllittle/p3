@extends('_master')

@section('title')
lorem-ipsum
@stop
@section('content')
How many paragraphs do you want?
  {{ Form::open(array('url' => 'lorem-ipsum')) }}
  {{ Form::number('num_paragraphs') }}
  {{ Form::submit('Generate') }}
  {{ Form::close() }}
@stop
