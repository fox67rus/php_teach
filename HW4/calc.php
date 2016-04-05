<?php
if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['operations'])) {
    switch ($_POST['operations']){
        case '+':
            $result = $_POST['a'] + $_POST['b'];
            break;
        case '-':
            $result = $_POST['a'] - $_POST['b'];
            break;
        case '*':
            $result = $_POST['a'] * $_POST['b'];
            break;
        case '/':
            if ($_POST['b'] == 0){
                $result = "<b>Ошибка. Деление на 0!</b>";
            }else{
                $result = $_POST['a'] / $_POST['b'];
            }
            break;
    }
} else
    $result = "";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Простой калькулятор</title>
</head>
<body>
<p><a href="index.php">На главную</a></p>
<h2>Простой калькулятор</h2>
<form method="post">
    <input type="text" name="a" required>
    <select name="operations">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="b" required>
    <input type="submit" value="=">
    <?php echo $result;?>
</form>
</body>
</html>