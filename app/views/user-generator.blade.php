@extends('_master')

@section('title')
user-generator
@stop
@section('content')
  {{ Form::open(array('url' => 'user-generator', 'method' => 'get')) }}
  {{ Form::label('num_users', 'How many users?') }}
  {{ Form::number('num_users',Input::get('num_users')) }}
  {{ Form::submit('Generate') }}
  {{ Form::close() }}
  @if(Input::has('num_users'))
  <?PHP shuffle ( $legislators['objects'])  ?>
  @for ($i = 0; $i < Input::get('num_users'); $i++)
       <?PHP $value = $legislators['objects'][$i];?>
      <p>
      <hr>
      First Name:  {{ $value['person']['firstname'] }}<br>
      Last Name:  {{ $value['person']['lastname'] }}<br>
      Birthday:  {{ $value['person']['birthday'] }}<br>
      Phone:  {{ $value['phone'] }}<br>
      Gender:  {{ $value['person']['gender_label'] }}<br>
      Title:  {{ $value['title_long'] }}<br>
      State:  {{ $value['state'] }}<br>
      @if ($value['website'])
      Website:  <A href="{{ $value['website' ]}}" target="_new">click to view</A><br>
      @endif
      @if (array_key_exists('twitterid' , $value['person']) and $value['person']['twitterid'])
      Twitter:  <a href="https://twitter.com/{{$value['person']['twitterid']}}" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @{{ $value['person']['twitterid'] }}</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      {{ $value['person']['twitterid'] }}<br>
      @endif
      @if (array_key_exists('youtubeid', $value['person']))
      <a href="youtube.com/user/{{$value['person']['youtubeid']}}"><img src="https://s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif"/></a>
      </p>
        @endif
  @endfor;
@endif
@stop

