@extends('_master')

@section('title')
lorem-ipsum
@stop
@section('nav')
 {{ HTML::linkRoute('welcome', '<- back') }}
@stop
@section('description')
<br><p>Here is a traditional developer lorem ipsum utility which generates a random set of paragraphs on demand.  The generated content can be utilized to help provide interim page content during the prototype and development cycle.</p>

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
<?php
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(Input::get('num_paragraphs'));
?>
@foreach ($paragraphs as $paragraph)
    <p>{{ $paragraph }}</p>
@endforeach




@endif
@stop
