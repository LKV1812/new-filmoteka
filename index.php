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
 
 $films = films_all($link);

 include 'views/head.tpl';
 include "views/notifications.tpl";
 include 'views/index.tpl';
 include 'views/footer.tpl';
?>
      
    