@extends('_master')

@section('title')
lorem-ipsum
@stop
@section('nav')
 {{ HTML::linkRoute('welcome', 'Home') }}
@stop
@section('description')
Here is a utility which provides a random set of users.  Rather that providing generic 'John and Jane Doe' users, this development tool adds a bit in politcal slant to
the process.

@stop
@section('content')
<br>
  {{ Form::open(array('url' => 'lorem-ipsum', 'method' => 'get')) }}
  {{ Form::label('num_paragraphs', 'How many paragraphs do you want?') }}
  {{ Form::selectRange('num_paragraphs', 1, 9, Input::get('num_paragraphs'));}}

  {{ Form::submit('Generate') }}
  {{ Form::close() }}
<br>
@stop
@section('results')
@if(Input::has('num_paragraphs'))
<hr><?php
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(Input::get('num_paragraphs'));
?>
@foreach ($paragraphs as $paragraph)
    <p>{{ $paragraph }}</p>
@endforeach




@endif
@stop
