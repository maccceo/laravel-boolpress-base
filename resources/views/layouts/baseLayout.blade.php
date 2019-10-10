<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title></title>
  </head>
  <body>
  	<div id="main-container">
      @include ('parts.header')
      @yield('content')
      @include ('parts.footer')
  	</div>
  </body>
</html>