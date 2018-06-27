<h1>Добавить новый фильм</h1>
<div class="panel-holder mt-30 mb-40">
  <div class="title-4 mt-0">Добавить фильм</div>
  <form action="new.php" method="POST">

    <?php  
      for ($i = 0; $i < count($error); $i++) {
        echo '<div class="error">'.$error[$i].'</div>';
      }  
    ?>
    
    <label class="label-title">Название фильма</label>
    <input class="input" type="text" placeholder="Введите название фильма..." name="title"/>
    <div class="row">
      <div class="col">
        <label class="label-title">Жанр</label>
        <input class="input" type="text" placeholder="Введите жанр фильма..." name="genre"/>
      </div>
      <div class="col">
        <label class="label-title">Год</label>
        <input class="input" type="text" placeholder="Введите год выпуска фильма..." name="year"/>
      </div>
    </div>
    <textarea class="textarea mb-20" name="description" placeholder="Введите описание фильма..."></textarea>
    <input type="submit" class="button button--submit" href="regular" value="Добавить" name="add-film">
  </form>
</div>