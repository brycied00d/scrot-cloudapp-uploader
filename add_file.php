<?php
/* Simple Uploader for CloudApp */
/* uploads $1 to CloudApp and returns the URL */

if($_SERVER['argc'] < 2)
	die('You must specify a file!'.PHP_EOL);
$file = $_SERVER['argv'][1];
if(!is_readable($file))
	die('Unable to access file: '.$file.PHP_EOL);
require_once('CloudApp/Cloud/API.php');
require_once('config.inc.php');
$cloud = new Cloud_API(USER_EMAIL, USER_PASS);
$ret = $cloud->addFile($file);
echo $ret->url.PHP_EOL;
?>
