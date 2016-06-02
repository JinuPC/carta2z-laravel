<?php

/*
|--------------------------------------------------------------------------
| Application Template Helpers
|--------------------------------------------------------------------------
|
| Here is where you can register all template helper functions for application.
| It's a breeze. Simply create functions and use it wherever required.
|
*/

use App\Options;
use App\User;

function add_option( $option, $value = '' ) {
	$options = new Options;
	$options->option_name = $option;
	$options->option_value = $value;
	$options->save();
}

function get_option( $option ) {
	$options = Options::where('option_name', '=', $option)->pluck('option_value');
	return $options;
}

function add_user( $username, $email, $password, $role = 'admin', $name = '', $status = 1 ) {
	$options = new User;
	$options->username	= $username;
	$options->email		= $email;
	$options->password	= bcrypt($password);
	$options->role		= $role;
	$options->firstname	= $name;
	$options->status	= $status;
	$options->save();
}

/**
 * Display the classes for the body element.
 *
 * @param string $class One or more classes to add to the class list separated by space.
 */
function body_class( $class = '' ) {
	echo 'class="' . join( ' ', get_body_class() ) . ' ' . $class . '"';
}

/**
 * Retrieve the classes for the body element as an array.
 *
 * @return array Array of classes.
 */
function get_body_class() {
	$classes = array();

	if( Auth::check() )
		$classes[] = 'logged';

	return $classes;
}