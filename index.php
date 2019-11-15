<?php
/**
 * @package evas-php/php-index-engine
 * Catching requests to latest index file.
 * Similar RewriteEngine for Nginx
 * This is index.php searher. Use this with try_files.
 *
 * @author Egor Vasyakin <e.vasyakin@itevas.ru>
 * @copyright (c) Egor Vasyakin, 2019
 */

// max nesting level
$maxLevel = 10;

// url path
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// if index file
if ($path == '/') {
	unset($maxLevel, $path);
	return 'global';
}

// current nesting level
$i = 1;

while (true) {
	// if path be local directory
	if (is_dir($_SERVER['DOCUMENT_ROOT'] . $path)) {
		$index = $_SERVER['DOCUMENT_ROOT'] . $path . '/index.php';
		// if has local index file
		if (is_file($index)) {
			$_SERVER['SCRIPT_FILENAME'] = $index;
			unset($maxLevel, $path, $i, $index);
			include $_SERVER['SCRIPT_FILENAME'];
			// return 'local';
			exit();
		}
	}

	// cut path
	$path = substr($path, 0, strrpos($path, '/'));

	// break if path is empty
	if (empty($path)) break;

	// increment nesting level. break if level more that max
	if (++$i >= $maxLevel) break;
}

// if 404
unset($maxLevel, $path, $i, $index);

// 404 response
header('HTTP/1.1 404 Not Found');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width">
	<title>404. Not Found.</title>
</head>
<body style="background: #fff; color: #222; font-family: Arial; font-size: 18px;">
	<div>
		<p><b>404. Not Found.</b></p>
		<p style="color: #888; font-size: 12px;"><a style="color: #77d;" href="https://github.com/evas-php/php-index-engine/" target="_blank">@phpIndexEngine</a> by <a style="color: #77d;" href="https://github.com/evas-php/" target="_blank">@evasPhp</a></p>
	</div>
</body>
</html>
<?php
// exit script
exit();
