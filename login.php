<?php 

	require 'config.php';
	require 'function/login-function.php';

	if (isset($_POST['enter'])) {
		$userLogin = 'admin';
		$userPassword = '123456';

		if ($_POST['login'] == $userLogin && $_POST['password'] == $userPassword) {
			
			$_SESSION['user'] = 'admin';
			header('Location: '.HOST.'index.php');

		}
	}

	include 'views/head.tpl';
	include 'views/login.tpl';
	include 'views/footer.tpl';
?>