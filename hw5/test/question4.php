<?php
session_start();
if (!empty($_POST['answ4'])){
    $_SESSION['answ4'] = $_POST['answ4'];
    header('Location:result.php', true, 307);
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
    <title>Тест.Вопрос 4</title>
    <link rel="stylesheet" href="../css/<?php echo $sStyle;?>.css">
</head>
<body>
Выберите правильный вариант ответа:
<form action="#" method="post">
    <caption>Вопрос 4: Самая длинная река в мире?</caption>
    <label>
        <br><input type="radio" name="answ4" value="Енисей">
        Енисей
    </label>
    <label>
        <br><input type="radio" name="answ4" value="Амазонка">
        Амазонка
    </label>
    <label>
        <br><input type="radio" name="answ4" value="Нил">
        Нил
    </label>
    <label>
        <br><input type="radio" name="answ4" value="Волга">
        Волга
    </label>
    <br><input type="submit" value="Ответить">
</form>
<br><b><?php echo $sMessage;?></b>
<!---->
<!--<pre>-->
<!--     System info:-->
<!--    --><?php //var_dump($GLOBALS);?>
<!--</pre>-->
</body>
</html>
