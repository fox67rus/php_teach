<?php
session_start();
$_SESSION['history'] = "page1";
if (isset($_SESSION['sColor'])) {
    $sStyle = $_SESSION['sColor'];
} else {
    $sStyle = 'green';
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Page A</title>
    <link rel="stylesheet" href="css/<?php echo $sStyle;?>.css">
</head>
<body>
<h1>Страница A</h1>
<h2>
   <?php (isset($_SESSION['login'])) ? print $_SESSION['login'] : print "Гость"; ?>, добро пожаловать на страницу A!
</h2>
<p>
    Вы на сайте уже:
    <b><?php echo time() - $_SESSION['time'];?> секунд</b>
</p>
<p>
    <a href="page2.php">Перейти на страницу В</a>
    <br><a href="test/question1.php">Перейти к тестированию. Дополнительное задание 4</a>
    <br><a href="setting.php">Настройить цвета</a>

</p>

<!--<pre>-->
<!--     System info:-->
<!--    --><?php //var_dump($GLOBALS);?>
<!--</pre>-->
</body>
</html>
