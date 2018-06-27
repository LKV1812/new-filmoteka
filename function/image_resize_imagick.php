<?php 

	// принимает путь к картинке до каких размеров обрезать высоту и ширину
	function createThumbnail ($imagePath, $cropWidth = 100, $cropHeight = 100) {
		/*чтение изображения*/
		// создает объект с изображением
		$imagick = new Imagick ($imagePath);
		// получем ширину изображения
		$width = $imagick -> getImageWidth();
		// получем высоту изображения
		$height = $imagick -> getImageHeight();

		// если ширина больше высоты обрезаем ширину
		$imagick -> thumbnailImage($cropWidth, $cropHeight);
		// if ($width > $height) {
		// 	$imagick -> thumbnailImage(0, $cropHeight);
		// } else {
		// 	$imagick -> thumbnailImage($cropWidth, 0);
		// }

		// оперделяем размеры полученных изображений
		$width = $imagick -> getImageWidth();
		$height = $imagick -> getImageHeight();

		// определяем центр изображения
		$centreX = round($width / 2);
		$centreY = round($height / 2);

		// определяем точку для обрезки по центру
		$cropWidthHalf = round($cropWidth / 2);
		$cropHeightHalf = round($cropHeight / 2);

		// координаты для старта обрезки
		$startX = max(0, $centreX - $cropWidthHalf);
		$startY = max(0, $centreY - $cropHeightHalf);

		$imagick -> cropImage($cropWidth, $cropHeight, $startX, $startY);

		// возвращаем готовое изображение
		return $imagick;
	}
?>