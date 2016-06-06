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
    @include('link.dashboardcss')
  </head>

  <body class="nav-md ">

  
  @include('admin.header')
                  
  <!-- page content -->
         <div class="col-md-12 " style="height:720px;">
          <div class="col-middle">
            <div class="text-center text-center">
            @include('link.alert')
              <h1 class="error-number">404</h1>
              <h2>Sorry but we couldn't find this page</h2>
              <p>This page you are looking for does not exist 
              </p>
              <div class="mid_center">
                <h3><a href="{{url('/')}}">Home</a></h3>
                <form>
                  <div class="col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
  <!-- /page content -->

       
  <!-- footer content -->
  @include('link.footer')
  <!-- /footer content -->      
  
  </body>
</html>