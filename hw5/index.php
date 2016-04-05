<?php
session_start();
if (!isset($_SESSION['time'])){
    $_SESSION['time'] = time();
}
if (((bool)$_SESSION['bAuth']) OR (isset($_COOKIE['login']) && (isset($_COOKIE['password'])))){
    if (isset($_SESSION['history'])){
        $sPath = $_SESSION['history'].'.php';
        header("Location:$sPath", true, 307);
    }else {
        header('Location:page1.php', true, 307);
    }
}else{
    header('Location:auth.php', true, 307);
    exit;
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<pre>
     System info:
    <?php var_dump($GLOBALS);?>
</pre>
</body>
</html>