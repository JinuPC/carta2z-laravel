<?php
  global $admin_url, $login_url, $register_url;
  //$role = Auth::user()->role;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ucfirst(Auth::user()->role.' Dashboard')}} </title>
    @yield('css')
  </head>

  <body class="nav-md ">

  
  @include('admin.header')
  
  <!-- page content -->
          @yield('content')
  <!-- /page content -->

       
  <!-- footer content -->
  @include('link.footer')
  <!-- /footer content -->      
  @yield('script')
  </body>
</html>