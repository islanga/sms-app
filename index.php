<?php
$files = require 'files.php';

require $files['config'];

/*
 * Include the page structure
 * @Date 2018-11-08
 */
if (file_exists($files['header'])) {
	require $files['header'];
}

if (file_exists($files['body'])) {
	require $files['body'];
}

if (file_exists($files['footer'])) {
	require $files['footer'];
}