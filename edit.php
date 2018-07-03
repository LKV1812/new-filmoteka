<?php  
  require 'config.php';
  require 'database.php';
  $link = db_connect();
  require 'models/films.php';
  require 'function/login-function.php';

  if (array_key_exists('update-film', $_POST)) {

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

      $result = update_film($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_POST['description'], $_GET['id']);
        
      if ($result) {
        $success = "Фильм успешно отредактирован!";         
      }
    }
  }

  $film = get_film($link, $_GET['id']);

  include 'views/head.tpl';
  include "views/notifications.tpl";
  include 'views/edit.tpl';
  include 'views/footer.tpl';
?>

