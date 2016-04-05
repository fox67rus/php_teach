<?php
error_reporting(E_ALL);
include ('resize.php');
require ('db_connection.php');
$connect = connect();

if (isset($_FILES['my_file'])) {
  $validate = validate_file($_FILES['my_file']);	
	
  if($validate['success']){
	upload_file($_FILES['my_file']);
	  db_add($connect, $_FILES['my_file']);
  }
  else{
	echo $validate['error'];
  }
}

function db_add($connect, $file_array){
	$picture_name = trim(htmlspecialchars($file_array['name']));
	$picture_path = 'img/fullsize/'.trim(htmlspecialchars($file_array['name']));
	$picture_size = (int)$file_array['size'];

	$sql = "INSERT INTO picture (picture_name, picture_path, picture_size)
			VALUES ('$picture_name', '$picture_path', '$picture_size')";
	$result = mysqli_query($connect, $sql);

	if (!$result)
		die(mysqli_error($connect));
}


function db_read($connect){
	$sql = "SELECT id_picture, picture_name, views FROM picture ORDER BY views DESC";
	$result = mysqli_query($connect, $sql);

	if (!$result)
		die(mysqli_error($connect));

	$arr = array();

	while($row = mysqli_fetch_assoc($result))
		$arr[] = $row;

	return $arr;
}
/**
* Функция валидации свойств файла
* @param array $file_array
* @return bool
*/
function validate_file($file_array){
	$result = array(
		'success'	=> true,
		'error'		=> ''
	);
	// валидация по типу
	$type_array = array('image/jpeg', 'image/gif','image/png');
	if(!in_array($file_array['type'], $type_array)){
		$result['success'] = false;
		$result['error'] = 'Тип файла не соответствует ожидаемому';
	}
	// валидация по размеру
	if($file_array['size'] > 8388608){
		$result['success'] = false;
		$result['error'] = 'Размер файла слишком большой';
	}
	return $result;
}

/**
* Функция загрузки файла
* @param array $file_array
* @return bool
*/
function upload_file($file_array){
	// копирование файла
	if (copy($file_array['tmp_name'], 'img/fullsize/'.$file_array['name'])){
		// ресайз
		create_thumbnail('img/fullsize/' . $file_array['name'], 'img/thumbs/' . $file_array['name'], 150, 150);
	}
	else{
		echo "ERROR";
	}
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
  </head>
  <body style="text-align: center;">
  <h2>Загрузить изображение</h2>
  <form method="post" enctype="multipart/form-data">
	  <input type="file" name="my_file"/>
	  <input type="submit" value="Загрузить"/>
  </form>
  <br>
    <div class="gallery" style="max-width: 1200px; margin: 0 auto; clear: both; overflow: hidden;">

	<?php
	$pictures = db_read($connect);
		foreach ($pictures as $image){ ?>
			<a href="photo.php?id=<?php echo $image['id_picture'];?>" target='_blank' style="width: 200px;">
				<img src="img/thumbs/<?php echo $image['picture_name']; ?>" title="<?php echo $image['views']; ?>" >
			</a>
		<?php }?>
    </div>
  <br>
<?php
 mysqli_close($connect) // разрываем соединение
  ?>
  </body>
</html>
