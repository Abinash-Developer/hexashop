<!DOCTYPE html>
<html lang="en">
    <head>
        @include('web.partials.header')
    </head>
    <body>
        @include('web.partials.menu')
        @yield('content')
        @include('web.partials.footer')
  </body>
</html>
