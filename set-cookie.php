<?php 

 	require 'config.php';
	require 'function/login-function.php';

	if (isset($_POST['user-submit'])) {
		$userName = $_POST['user-name'];
		$userSity = $_POST['user-sity'];
		$expire = time()+60*60*24*30;

		setcookie('user-name', $userName, $expire);
		setcookie('user-sity', $userSity, $expire);

		// переходим на страницу request.php
	}
	header('Location: '.HOST.'request.php');
?>