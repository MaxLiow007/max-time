<?php

define('HELLO', 'hello');
define('SITE_URL', "http://localhost/maxliow");

// ROUTING MAP
$section = (isset($_GET['section']) && !empty($_GET['section']))?$_GET['section']:'home';

// ROUTING
switch ($section) {
	case 'home':
		require('home.php');
		break;
	case 'test':
		require('version2.php');
		break;
	default:
		http_response_code(404);
		exit;
}

exit;