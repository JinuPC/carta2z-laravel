<?php
	global $admin_url, $login_url, $register_url;
?>

@if(Auth::check())
    <div id="adminbar" style="position: fixed;
  padding:10px;
  padding-bottom: 0px;
  margin-bottom:0px;
  z-index: 9999;
  width: 100%;">
        <ul class="list-inline pull-left">

            <li class="menu-item" style="color:white; font-size:15px;"><a style="color:white; display:block; text-decoration:none;" href="{{ $admin_url }}"><i class="fa fa-tachometer" aria-hidden="true" style="  color: white; "></i>&nbsp;Dashboard</a></li>
            
        </ul>
        <ul class="list-inline pull-right">
            <li class="menu-item" style="color:white;"><a style="color:white; display:block; text-decoration:none;" href="{{ url('logout') }}" ng-click="logout()"><i class="fa fa-sign-out" aria-hidden="true" style="  color: white; "></i>&nbsp;Log Out</a></li>
        </ul>
    </div>
@endif