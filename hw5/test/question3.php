<?php
session_start();
if (!empty($_POST['answ3'])){
    $_SESSION['answ3'] = $_POST['answ3'];
    header('Location:question4.php', true, 307);
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
    <title>Тест.Вопрос 3</title>
    <link rel="stylesheet" href="../css/<?php echo $sStyle;?>.css">
</head>
<body>
Выберите правильный вариант ответа:
<form action="#" method="post">
    <caption>Вопрос 4: Столица Австралии?</caption>
    <label>
        <br><input type="radio" name="answ3" value="Сидней">
        Сидней
    </label>
    <label>
        <br><input type="radio" name="answ3" value="Канберра">
        Канберра
    </label>
    <label>
        <br><input type="radio" name="answ3" value="Перт">
        Перт
    </label>
    <label>
        <br><input type="radio" name="answ3" value="Лондон">
        Лондон
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
