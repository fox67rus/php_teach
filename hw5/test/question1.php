<?php
session_start();
if (!empty($_POST['answ1'])){
    $_SESSION['answ1'] = $_POST['answ1'];
    header('Location:question2.php', true, 307);
    exit;
} $sMessage = "Нужно выбрать один вариант ответа";

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
    <title>Тест.Вопрос 1</title>
    <link rel="stylesheet" href="../css/<?php echo $sStyle;?>.css">
</head>
<body>
Выберите правильный вариант ответа:
<form action="#" method="post">
    <caption>Вопрос 1. Чему равен 3! (факториал)?</caption>
    <label>
        <br><input type="radio" name="answ1" value="6">
        6
    </label>
    <label>
        <br><input type="radio" name="answ1" value="3">
        3
    </label>
    <label>
        <br><input type="radio" name="answ1" value="1">
        1
    </label>
    <label>
        <br><input type="radio" name="answ1" value="0">
        0
    </label>
    <br> <input type="submit" value="Ответить">
</form>
<br><b><?php echo $sMessage;?></b>

<!--<pre>-->
<!--     System info:-->
<!--    --><?php //var_dump($GLOBALS);?>
<!--</pre>-->
</body>
</html>
