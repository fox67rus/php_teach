<?php
session_start();
if (!empty($_POST['answ2'])){
    $_SESSION['answ2'] = $_POST['answ2'];
    header('Location:question3.php', true, 307);
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
    <title>Тест.Вопрос 2</title>
    <link rel="stylesheet" href="../css/<?php echo $sStyle;?>.css">
</head>
<body>
Выберите правильный вариант ответа:
<form action="#" method="post">
    <caption>Вопрос2: Чему равна сумма углов трегольника (Евклидова геометрия)?</caption>
    <label>
        <br><input type="radio" name="answ2" value="180">
        180 градусов
    </label>
    <label>
        <br><input type="radio" name="answ2" value="360">
        360 градусов
    </label>
    <label>
        <br><input type="radio" name="answ2" value="0">
        0 градусов
    </label>
    <label>
        <br><input type="radio" name="answ2" value="-1">
        Невозможно определить
    </label>
   <br> <input type="submit" value="Ответить">
</form>
<br><b><?php echo $sMessage;?></b>
<!---->
<!--<pre>-->
<!--     System info:-->
<!--    --><?php //var_dump($GLOBALS);?>
<!--</pre>-->
</body>
</html>
