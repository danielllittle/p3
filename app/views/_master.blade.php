<!doctype html>
<html>
  <meta charset="utf-8">
  <title>
    @yield('title','DWA15 - Project 3')
  </title>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css') }}">
</head>

<body>
  <div class="nav">@yield('nav')</div>
  @yield('content')
  @yield('results')
</body>
</html>
