<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once 'dao.php';

$dba = new dao();

$valid = $dba->isValidUserName($username, $password);

//$_SESSION = array();

if($valid){
	//$_SESSION['logged_in'] = true;
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_account.php");
	exit;	
}else{
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;	
}

