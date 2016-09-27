<?php
	// config
	require_once('template.class.php');
	//define('TEMPLATES_PATH','templates');

	//instanciate new Object 
	$template = new Template('test.tpl.html');

	$template -> assgin('title','Helloaaa');

	$template -> assgin('test','Hanoi');

	$template -> show();
?>