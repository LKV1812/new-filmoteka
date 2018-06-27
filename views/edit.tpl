
<h1 class="title-1">Фильм <?=$film['title']?></h1>
<div class="panel-holder mb-20">
  <div class="title-4 mt-0">Редактировать фильм</div>
  <form enctype="multipart/form-data" action="edit.php?id=<?=$film['id']?>" method="POST">

    <?php  

      for ($i = 0; $i < count($error); $i++) {
        echo '<div class="error">'.$error[$i].'</div>';
      }
      
    ?>
    
    <label class="label-title">Название фильма</label>
      <input class="input" type="text" name="title" value="<?=$film['title']?>" />
      <div class="row">
        <div class="col">
          <label class="label-title">Жанр</label>
          <input class="input" type="text" name="genre" value="<?=$film['genre']?>" />
        </div>
        <div class="col">
          <label class="label-title">Год</label>
          <input class="input" type="text" name="year" value="<?=$film['year']?>" />
        </div>
      </div>
      <textarea class="textarea mb-20" name="description"><?=$film['description']?></textarea>
      <div class="mb-20">
        <input type="file" name="photo">
      </div>
      <input type="submit" class="button button--submit" href="regular" value="Изменить" name="update-film">
    </form>
    </div>
    <div class="mb-100">
      <a href="index.php" class="button">На главную</a>
    </div>