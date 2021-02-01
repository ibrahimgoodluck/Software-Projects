<?php
	require_once 'core/config.php';
	require_once 'core/functions.php';

	$_SESSION['success'] = null;
	$_SESSION['customer'] = null;
	$_SESSION['admin'] = null;

	header('Location: index.php');
?>