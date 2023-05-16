<!DOCTYPE html>
<html lang="en">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @include('layout.Dashboard_User._nav')
  <body>
   @include('layout.Dashboard_User._head')

    @yield('konten')

    @include('layout.Dashboard_User._aside')
    <!-- @include('layout.Dashboard_User.scripts') -->
  </body>
</html>
