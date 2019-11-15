<?php
/**
 * The domain front page.
 */

/**
 * Include RewriteEngine for Nginx by Egor Vasyakin <e.vasyakin@itevas.ru>
 */
include dirname(__DIR__) . '/index.php';

echo 'The ' . $_SERVER['SERVER_NAME']. ' home page';
