<h1 class="title-1"> Фильмотека</h1>

<?php  
  foreach ($films as $key => $value) {?>
    <div class="card mb-20">
      <div class="row">
        <div class="col-auto">
          <img src="<?=HOST?>data/films/min/<?=$value['photo']?>" alt="<?=$value['title']?>">
        </div>
        <div class="col">
          <div class="card__header">
            <h4 class="title-4"><?=$value['title']?></h4>
            <div>
              <a href="edit.php?id=<?=$value['id']?>" class="button button--edit">Редактировать</a>
              <a href="?action=delete&id=<?=$value['id']?>" class="button button--delete">Удалить</a>
            </div>
          </div> 
          <div class="badge"><?=$value['genre']?></div>
          <div class="badge"><?=$value['year']?></div>
          <div class="mt-20">
            <a href="single.php?id=<?=$value['id']?>" class="button">Подробнее</a>
          </div>
        </div>
      </div>
    </div>
 <?php }
?>