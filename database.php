<?php 
	
	function db_connect() {
		
		$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

		if(mysqli_connect_error($link)) {
        	die("Ошибка подключения к базе данных!");
    	}

    	if (mysqli_set_charset($link, "utf-8")) {

    		printf("Error: ".mysqli_error($link));
    		 
    	}

    	return $link;
	}

?>