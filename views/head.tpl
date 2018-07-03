<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <title>UI-kit и HTML фреймворк - Документация</title>
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/><!-- build:cssVendor css/vendor.css -->
    <link rel="stylesheet" href="libs/normalize-css/normalize.css"/>
    <link rel="stylesheet" href="libs/bootstrap-4-grid/grid.min.css"/>
    <link rel="stylesheet" href="libs/jquery-custom-scrollbar/jquery.custom-scrollbar.css"/><!-- endbuild -->
<!-- build:cssCustom css/main.css -->
    <link rel="stylesheet" href="./css/main.css"/><!-- endbuild -->
    <link rel="stylesheet" href="css/custom.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=cyrillic-ext" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="container user-content pt-35">
      <div class="admin-nav mb-50">
        <a href="index.php" class="admin-nav__link">Все фильмы</a>

      <?php if(isAdmin()) { ?> 

        <a href="new.php" class="admin-nav__link">Добавить новый фильм</a> 

      <?php } ?>

        <a href="request.php" class="admin-nav__link">Указать инфомацию</a>

      <?php if(isAdmin()) { ?> 

        <a href="logout.php" class="admin-nav__link">Выйти</a>
        
      <?php } else { ?>

        <a href="login.php" class="admin-nav__link">Войти на сайт</a>

      <?php } ?>

      </div>
      
      <?php if(isset($_COOKIE['user-name'])) {?>

        <div class="mb-30">

          Привет! <?=$_COOKIE['user-name']?>

          <?php if(isset($_COOKIE['user-sity'])) {?>
            из <?=$_COOKIE['user-sity']?>!
          <?php } ?> 

        </div>

      <?php } ?>
      
      