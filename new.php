<?php 
	require 'config.php';
	require 'database.php';
	$link = db_connect();
    require 'models/films.php';

    if (array_key_exists('add-film', $_POST)) {

    	if ($_POST['title'] == '') {
		    $error[] = "Введите название фильма!";
		  }

		  if ($_POST['genre'] == '') {
		    $error[] = "Введите жанр фильма!";
		  }

		  if ($_POST['year'] == '') {
		    $error[] = "Введите год выпуска фильма!";
		  }

		if (($_POST["title"] != "") && ($_POST["genre"] != "") && ($_POST["year"] != "")) {
    	
    		$result = film_new($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_POST['description']);
    		
    		if ($result) {
		      $success = "Фильм успешно добавлен!";    
    		}
		}
    }
    include 'views/head.tpl';
    include "views/notifications.tpl";
    include 'views/new-film.tpl';
	include 'views/footer.tpl';
?>