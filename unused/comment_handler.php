<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once 'dao.php';

$valid = $dao->isValidUsername($username);

if($valid){
	header("sc_login.php");
	exit;
}else{
	echo "NO";
}
