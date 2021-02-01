<?php
require_once 'core/config.php';
unset($_SESSION['customer']);
$_SESSION['success'] = null;
$_SESSION['admin'] = null;
$_SESSION['doctor'] = null;

header('Location: index.php');
// header('Location:third.php');