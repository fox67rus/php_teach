<?php
$sMessage = "";

if (isset($_POST['login']) && (isset($_POST['pass']))) {
    if (isset($_POST["remember"])){
        setcookie("login", $_POST['login']);
        setcookie("password",$_POST['pass']);
    }
    session_start();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['bAuth'] = true;
    $sMessage = "Авторизация прошла успешно";
    header( 'Location: index.php', true, 307 );
    exit;
    }else $sMessage = "Введите данные";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form  action="#" method="post">
    <caption>Форма регистрации</caption>
    <br><br>Логин:<br><input type="text" name="login" required>
    <br>Пароль:<br><input type="password" name="pass" required>
    <br><input type="checkbox" name="remember">Запомнить меня
    <br><br><input type="submit" value="Войти">
</form>
<?php echo "<br><b>$sMessage</b>"; ?>

<pre>
     System info:
    <?php var_dump($GLOBALS);?>
</pre>
</body>
</html>
