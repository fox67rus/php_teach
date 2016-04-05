<?php
if (isset($_POST['fStyle'])) {

    session_start();
    $_SESSION['sColor'] = $_POST['fStyle'];

    header( 'Location: index.php', true, 307 );
    exit;
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Настройки</title>
</head>
<body>
<form action="#" method="post">
    <label>
        <br><input type="radio" name="fStyle" value="blue">
        Синяя схема
    </label>
    <label>
        <br><input type="radio" name="fStyle" value="green" checked>
        Зеленая схема(по умолчанию)
    </label>
    <label>
        <br> <input type="radio" name="fStyle" value="orange">
        Оранжевая схема
    </label>
    <br>  <br> <input type="submit" value="Сохранить">
</form>
</body>
</html>
