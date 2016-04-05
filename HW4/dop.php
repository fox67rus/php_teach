<?php
$sMessage = "";
if (!empty($_POST)) {
    $login = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['pass']);
    $pass_check = htmlspecialchars($_POST['pass_check']);
    $email = htmlspecialchars($_POST['email']);
    $name = htmlspecialchars($_POST['FIO']);
    $tel = htmlspecialchars($_POST['tel']);

    if (empty($login)){
        $sMessage .= "Логин не может быть пустым<br>";
    }elseif (empty($pass)){
        $sMessage .= "Вы забыли ввести пароль<br>";
    }elseif (!preg_match("[a-zA-Z0-9_]{8", $pass)){
        $sMessage .= "Пароль должен быть не короче 8 символов, должен содержать
        символы в верхнем и нижнем регистре и хотя бы одну цифру<br>";
    }elseif (!($pass === $pass_check)){
        $sMessage .= "Пароли не совпадают<br>";
    }elseif (!preg_match("/^[0-9a-z_\.]+@[0-9a-z_^\.]+\.[a-z]{2,6}$/i", $email)){
        $sMessage .= "Вы некорректно ввели адрес электронной почты<br>";
    }elseif (!preg_match("^[-а-яе\s\.,;:\?!]+$|i ", $name)){
        $sMessage .= "Введите имя на русском языке<br>";
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ДЗ4. Дополнительное задание</title>
</head>
<body>
<p><a href="index.php">На главную</a></p>
    <form method="post">
        <caption>Форма регистрации</caption>
        <p>
            <label for="1">Логин:</label><br>
            <input type="text" id="1" name="login" value="<?php if (isset( $login)) {echo $login; } ?>">
        </p>
        <p>
            <label for="2">Пароль:</label><br>
            <input type="password" id="2" name="pass" value="">
        </p>
        <p>
            <label for="3">Повторите пароль:</label><br>
            <input type="password" id="3" name="pass_check" value="">
        </p>
        <p>
            <label for="4">Адрес электронной почты:</label><br>
            <input type="text" id="4" name="email" placeholder="yourmail@host.com" value="<?php if (isset( $email)) {echo $email; } ?>">
        </p>
        <p>
            <label for="5">Ваше имя:</label><br>
            <input type="text" id="5" name="FIO" value="<?php if (isset( $name)) {echo $name; } ?>">
        </p>
        <p>
            <label for="6">Телефон:</label><br>
            <input type="tel" id="6" name="tel" value="<?php if (isset( $tel)) {echo $tel; } ?>">
        </p>
        <input type="submit" value="Отправить">
    </form>

        <?php
//        if ($sMessage){
//            echo "<p style=\"color: green\"><b>Данные успешно отправлены</b></p>";
//        }else{
            echo "<p style=\"color:red\"><b>$sMessage</b></p>";
//        }
        ?>

</body>
</html>