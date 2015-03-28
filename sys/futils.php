<?php

class F {

	public static function getBaseUrl() {
	    $protocol = (!empty($_SERVER['HTTPS']) && 
	    	$_SERVER['HTTPS'] !== 'off' || 
	    	$_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

	    $host = $_SERVER['HTTP_HOST'] . 
	    	($_SERVER['SERVER_PORT'] != 80 ? ':' . $_SERVER['SERVER_PORT'] : '');

	    return $protocol . $host . '/';
	}

	public static function isNullOrEmptyString($s){
	    return (!isset($s) || trim($s)=== '');
	}
}