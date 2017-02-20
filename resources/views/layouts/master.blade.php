<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ URL::to('css/style.css')}}"  />
    @yield('styles')
  </head>
  <body>
    <div class="main">
      @yield('content')
    </div>
  </body>
</html>
