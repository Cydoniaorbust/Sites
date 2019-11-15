<?php

define('BASE_URL', '/forms');

$pagesMap = [
	'/' => 'home',
	
	'/login' => 'auth/login',
	'/registration' => 'auth/registration',
	'/logout' => 'auth/logout',

	'/users' => 'users',
];

$uri = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
$page = $pagesMap[$uri] ?? '404';
include "pages/$page.php";

?>

