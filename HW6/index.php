<?php
require "resize.php";
function upload_file($file){
    if ($file['name'] == ""){
        echo "Файл не выбран!";
        return;
    }

    if ($file['size'] > 5242880) {       //если файл больше 5Мб
        echo "Файл больше 5 Мб!";
        return;
    }

    if (($file['type'] == 'image/jpeg') OR ($file['type'] == 'image/gif') OR ($file['type'] == 'image/png')){
        if (copy($file['tmp_name'], 'img/'.$file['name']))
            echo "<b style='color:green'>Файл успешно загружен</b>";
        else
            echo 'Ошибка загрузки файла';

    }else {
        echo "<b style='color:red'>Выбранный тип файла не поддерживается</b>";
        return;
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Галерея изображений</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <caption><b>Загрузить новое изображение:</b></caption>
    <br><input type="file" name="file">
    <input type="submit" value="Загрузить">
</form>
<?php
    if (isset($_FILES['file'])){
        upload_file($_FILES['file']);
    }
?>
<br>

<?php
    $directory = 'img/';
    $aFileList = array_slice(scandir($directory), 2);
    foreach ($aFileList as $rImg) {
?>
    <a href="img/<?php echo $rImg;?>" target="_blank"><img src="img/<?php echo $rImg;?>" width=200"></a>
    <?php }?>

<!--<pre>-->
<!--     System info:-->
<!--    --><?php //var_dump($GLOBALS);?>
<!--</pre>-->

</body>
</html>
