<?php 

 	require 'config.php';
	require 'function/login-function.php';

	if (isset($_POST['user-unset'])) {
		$userName = "";
		$userSity = "";
		$expire = time()-1;

		setcookie('user-name', $userName, $expire);
		setcookie('user-sity', $userSity, $expire);

		// переходим на страницу request.php
	}
	header('Location: '.HOST.'request.php');
?>