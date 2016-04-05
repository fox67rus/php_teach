<?php
    if (isset($_POST['a']) && isset($_POST['b']))
        $result = $_POST['a'] + $_POST['b'];
    else
        $result = "";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Простой сумматор</title>
</head>
<body>
    <p><a href="index.php">На главную</a></p>
    <form method="post">
        <input type="text" name="a" required>
        +
        <input type="text" name="b" required>
        <input type="submit" value="=">
        <?php echo $result;?>
    </form>
</body>
</html>
