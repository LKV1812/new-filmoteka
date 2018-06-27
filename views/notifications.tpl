<?php 
  if ($resultInfo == "Фильм удален!") {
      echo '<div class="info-notification">'.$resultInfo.'</div>';
  } 

  if ($success == "Фильм успешно отредактирован!") {
    echo '<div class="success success--edit">'.$success.'</div>';
  }

  if ($success == "Фильм успешно добавлен!") {
  		echo '<div class="success">'.$success.'</div>';
  }
?>