<?php

define('BASE_URL', '/Socionics');

$pagesMap = [
	'/' => 'body',
	'/users' => 'users',
];

include 'layouts/header.php';

$uri = str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']);
$page = $pagesMap[$uri] ?? '404';
include "layouts/$page.php";

include 'layouts/footer.php';

?>
