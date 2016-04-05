<?php
    $id = $_GET['id'];
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Просмотр картинки № <?php echo $id; ?></title>
</head>
<body>
    <p><a href="index.php">На главную</a></p>
    <img src="img/<?php echo $id;?>.jpg" width="300">
    <h2>Картинка №<?php echo $id;?></h2>
</body>
</html>
