<h1>Укажите ваши данные</h1>
<div class="panel-holder mt-30 mb-40">
  <form action="set-cookie.php" method="POST">
    
    <label class="label-title">Ваше имя</label>
    <input class="input" type="text" name="user-name"/>

    <label class="label-title">Ваш город</label>
    <input class="input" type="text" name="user-sity"/>
    
    <input type="submit" class="button button--submit" href="regular" value="Сохранить" name="user-submit">
  </form>
</div>

<form action="unset-cookie.php" method="POST">
  
  <input type="submit" class="button button--submit" href="regular" value="Удалить данные" name="user-unset">

</form>