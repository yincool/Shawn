<?php
	require_once 'ClassLoader.php';
	spl_autoload_register(array('ClassLoader', 'autoload'));
	$a = new Say();
	$a->says();