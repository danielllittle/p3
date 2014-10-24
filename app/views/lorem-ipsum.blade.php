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
<?php 
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(2);
echo implode('<p>', $paragraphs);
?>
<hr>
<?php // require the Faker autoloader

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
for ($i=0; $i < 10; $i++) {
  echo $faker->name, "<br>";
}?>

