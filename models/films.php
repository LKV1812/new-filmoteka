<?php 

	function films_all ($link) {
		
		$query = "SELECT * FROM `films`";
		$resultFromTheDatabase = mysqli_query($link, $query);
		$receivedDataLine  = mysqli_fetch_array($resultFromTheDatabase);
		$films = array();

		if ($resultFromTheDatabase = mysqli_query($link, $query)) {

			while ($receivedDataLine = mysqli_fetch_array($resultFromTheDatabase)) {

				$films[] = $receivedDataLine;

			}
		}

		return $films;
	}

	function film_new ($link, $title, $genre, $year, $description) {

		if (isset($_FILES['photo']['name']) && $_FILES['photo']['tmp_name'] != "") {
			
			// имя крартинки
			$fileName = $_FILES['photo']['name'];
			// путь к картинке
			$fileTmpLoc = $_FILES['photo']['tmp_name'];
			// тип файла
			$fileType = $_FILES['photo']['type'];
			// размер картинки
			$fileSize = $_FILES['photo']['size'];
			// если есть ошибки записываем их в переменную 
			$fileErrorMsg = $_FILES['photo']['error'];
			// чтобы получить расширение файла, разбиваем его на две части до точки и после
			$kaboom = explode('.', $fileName);
			// вторую часть записываем в переменную
			$fileExt = end($kaboom);

			// получаем размер картинки 
			list($width, $height) = getimagesize($fileTmpLoc);
			if ($width < 10 || $height < 10) {
				$error[] = 'Картинка слишком маленькая!';
			}

			$db_file_name = rand(10000000,99999999).'.'.$fileExt;

			if ($fileSize > 10485760) {
				$error[] = 'Картинка не должна быть больше 10мб!';
			} elseif (!preg_match('/\.(gif|jpg|png|jpeg)$/i', $fileName)) {
				$error[] = 'Картинка должна иметь расширение gif или jpg или png!';
			}elseif ($fileErrorMsg == 1) {
				$error[] = 'Ошибка! Не получилось загрузить крартинку!';
			}

			// путь куда будем перемещать картинки
			$photoFolderLocation = ROOT.'data/films/full/';
			$photoFolderLocationMin = ROOT.'data/films/min/';
			// $photoFolderLocationFull = ROOT.'data/films/full/';

			$uploadfile = $photoFolderLocation.$db_file_name;

			// перемещаем файл, первый параметр откуда, второй куда
			$moveResult = move_uploaded_file($fileTmpLoc, $uploadfile);
			if ($moveResult != true) {
				$error[] = 'Ошибка! Загрузка файла оборвалась!';
			}

			require_once (ROOT.'function/image_resize_imagick.php');

			// указываем куда сохраняем картинку
			$target_file = $photoFolderLocation.$db_file_name;
			$resized_file = $photoFolderLocationMin.$db_file_name;

			$wmax = 137;
			$hmax = 200;

			$img = createThumbnail($target_file, $wmax, $hmax);
			$img -> writeImage($resized_file);

		}

		if (array_key_exists('add-film', $_POST)) {

		    $query = "INSERT INTO `films` (`title`,`genre`,`year`, `description`, `photo`) VALUES (
		            '".mysqli_real_escape_string($link, $title)."',
		            '".mysqli_real_escape_string($link, $genre)."',
		            '".mysqli_real_escape_string($link, $year)."', 
		            '".mysqli_real_escape_string($link, $description)."',
		            '".mysqli_real_escape_string($link, $db_file_name)."' 
		          )";      
		  
		    if (mysqli_query($link, $query)) {
		    	$result = true;
		    } else {
		    	$result = false;
		    }
		}
		return $result;
	}

	function get_film ($link, $id) {
		$query = "SELECT * FROM `films` WHERE `id` = '".mysqli_real_escape_string($link, $id)."'LIMIT 1";
		if ($result = mysqli_query($link, $query)) {
			$film = mysqli_fetch_array($result);
		}
		return $film;
	}

	function update_film ($link, $title, $genre, $year, $description, $id) {

		if (isset($_FILES['photo']['name']) && $_FILES['photo']['tmp_name'] != "") {
			
			// имя крартинки
			$fileName = $_FILES['photo']['name'];
			// путь к картинке
			$fileTmpLoc = $_FILES['photo']['tmp_name'];
			// тип файла
			$fileType = $_FILES['photo']['type'];
			// размер картинки
			$fileSize = $_FILES['photo']['size'];
			// если есть ошибки записываем их в переменную 
			$fileErrorMsg = $_FILES['photo']['error'];
			// чтобы получить расширение файла, разбиваем его на две части до точки и после
			$kaboom = explode('.', $fileName);
			// вторую часть записываем в переменную
			$fileExt = end($kaboom);

			// получаем размер картинки 
			list($width, $height) = getimagesize($fileTmpLoc);
			if ($width < 10 || $height < 10) {
				$error[] = 'Картинка слишком маленькая!';
			}

			$db_file_name = rand(10000000,99999999).'.'.$fileExt;

			if ($fileSize > 10485760) {
				$error[] = 'Картинка не должна быть больше 10мб!';
			} elseif (!preg_match('/\.(gif|jpg|png|jpeg)$/i', $fileName)) {
				$error[] = 'Картинка должна иметь расширение gif или jpg или png!';
			}elseif ($fileErrorMsg == 1) {
				$error[] = 'Ошибка! Не получилось загрузить крартинку!';
			}

			// путь куда будем перемещать картинки
			$photoFolderLocation = ROOT.'data/films/full/';
			$photoFolderLocationMin = ROOT.'data/films/min/';
			// $photoFolderLocationFull = ROOT.'data/films/full/';

			$uploadfile = $photoFolderLocation.$db_file_name;

			// перемещаем файл, первый параметр откуда, второй куда
			$moveResult = move_uploaded_file($fileTmpLoc, $uploadfile);
			if ($moveResult != true) {
				$error[] = 'Ошибка! Загрузка файла оборвалась!';
			}

			require_once (ROOT.'function/image_resize_imagick.php');

			// указываем куда сохраняем картинку
			$target_file = $photoFolderLocation.$db_file_name;
			$resized_file = $photoFolderLocationMin.$db_file_name;

			$wmax = 137;
			$hmax = 200;

			$img = createThumbnail($target_file, $wmax, $hmax);
			$img -> writeImage($resized_file);

		}

		$query = "UPDATE `films` SET 
		  title = '".mysqli_real_escape_string($link, $title)."', 
		  genre = '".mysqli_real_escape_string($link, $genre)."', 
		  year = '".mysqli_real_escape_string($link, $year)."', 
		  description = '".mysqli_real_escape_string($link, $description)."', 
		  photo = '".mysqli_real_escape_string($link, $db_file_name)."' 
		  WHERE id = ".mysqli_real_escape_string($link, $id);
		
		if ($result = mysqli_query($link, $query)) {
		  $result = true;  
		} else {
			$result = false;
		}

		return $result;
	}

	function film_delete ($link, $id) {
		$query = "DELETE FROM `films` WHERE `id` = '".mysqli_real_escape_string($link, $id)."'LIMIT 1";
		mysqli_query($link,$query);

		if (mysqli_affected_rows($link) > 0) {
		  $result = true;
		} else {
			$result = false;
		}
		return $result;
	}

?>