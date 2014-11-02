@extends('_master')

@section('title')
Political Random User-generator
@stop

@section('nav')
 {{ HTML::linkRoute('welcome', '<- back') }}
 <hr>
@stop


@section('description')
<p>A random user generator utility with a political slant.   In honor of the upcoming United States elections, the randomly selected user profiles will be formed based on existing United States leaders.

</p>
Generated profile information includes:
<ul>
<li>First Name</li>
<li>Last Name</li>
<li>Birthdate</li>
<li>Phone</li>
<li>Gender</li>
<li>Title</li>
<li>State</li>
</ul>
Optional generated social links include:
<ul><li>Youtube</li>
<li>Twitter</li>
<li>US Govt Bio</li>
</ul>
@stop
@section('content')
  <br>
  {{ Form::open(array('url' => 'user-generator', 'method' => 'get')) }}
  {{ Form::label('num_users', 'How many users?') }}
  {{ Form::number('num_users',Input::get('num_users')) }} (max. 100)<br>
  {{ Form::label('add_social', 'Add Social links?') }}
  {{ Form::checkbox('add_social', 'add_social', Input::get('add_social')) }}<br><br>
  {{ Form::submit('Generate') }}
  {{ Form::close() }}<br>
@stop
@section('results')
  @if(Input::has('num_users'))

      <?PHP shuffle ( $legislators['objects']);?>

      @for ($i = 0; $i < Input::get('num_users'); $i++)
          <?PHP $value = $legislators['objects'][$i];?>
          <p>
          First Name:  {{ $value['person']['firstname'] }}<br>
          Last Name:  {{ $value['person']['lastname'] }}<br>
          Birthday:  {{ $value['person']['birthday'] }}<br>
          Phone:  {{ $value['phone'] }}<br>
          Gender:  {{ $value['person']['gender_label'] }}<br>
          Title:  {{ $value['title_long'] }}<br>
          State:  {{ $value['state'] }}<br>

          @if (Input::get('add_social'))
              @if (array_key_exists('youtubeid', $value['person']) and $value['person']['youtubeid'])
                  <a target="_new" href="http://youtube.com/user/{{$value['person']['youtubeid']}}"><img width="32" height="32" src="/images/youtube.png"/></a>
              @endif

              @if (array_key_exists('twitterid', $value['person']) and $value['person']['twitterid'])
                  <a href="https://twitter.com/{{$value['person']['twitterid']}}" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @{{ $value['person']['twitterid'] }}</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
              @endif

              @if ($value['website'])
                  <A href="{{ $value['website' ]}}" target="_new"><img src="/images/www-web.jpeg"/></A>
              @endif
          @endif
          <hr>
      @endfor
  @endif
@stop

