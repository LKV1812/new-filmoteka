<?php 
 require 'config.php';
 require 'database.php';
 $link = db_connect();
 require 'models/films.php';
 require 'function/login-function.php';

 if (@$_GET['action'] == 'delete') {
 	
 	$result = film_delete($link, $_GET['id']);
 	
 	if ($result) {
 		$resultInfo = "Фильм удален!";
 	}
 }

 $film = get_film($link, $_GET['id']);

 include 'views/head.tpl';
 include "views/notifications.tpl";
 include 'views/film-single.tpl';
 include 'views/footer.tpl';
?>
      
    