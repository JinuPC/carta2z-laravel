<?php
	global $admin_url, $login_url, $register_url;
?>

@if(Auth::check())
	<div id="adminbar">
		<ul class="list-inline pull-left">
			<li class="menu-item"><a href="{{ $admin_url }}/#/"><i class="ion-speedometer"></i>Control Panel</a></li>
			<li class="menu-item"><a href="{{ url('/') }}/#/"><i class="ion-android-home"></i>Home</a></li>
		</ul>
		<ul class="list-inline pull-right">
			<li class="menu-item"><a href="{{ url('logout') }}" ng-click="logout()"><i class="ion-share"></i>Log Out</a></li>
		</ul>
	</div>
@endif