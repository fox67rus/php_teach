<?php
error_reporting(E_ALL);
require ('db_connection.php');
$connect = connect();

if (!empty($_GET)){
    $id = $_GET['id'];
    $sql = "SELECT picture_path FROM picture WHERE (id_picture='$id')";
    $result = mysqli_query($connect, $sql);

    if (!$result)
        die(mysqli_error($connect));
    $row = mysqli_fetch_array($result);

    $sql_count_add = "UPDATE picture SET views=views+1 WHERE (id_picture='$id')";
    $result2 = mysqli_query($connect, $sql_count_add);
    if (!$result2)
        die(mysqli_error($connect));

    $result3 = mysqli_query($connect, "SELECT views FROM picture WHERE (id_picture='$id')");


    $count = mysqli_fetch_array($result3);
    ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<img src="<?php echo $row['picture_path'];?>">
<br><?php echo "Количество просмотров: ". $count['views'];?>
<?php }
  mysqli_close($connect) // разрываем соединение
?>
</body>
</html>

