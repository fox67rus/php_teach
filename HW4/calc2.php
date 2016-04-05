<?php
if (!empty($_POST) && is_numeric($_POST['a']) && is_numeric($_POST['a'])) {
    switch ($_POST['operations']){
        case '+':
            $result = (int)$_POST['a'] + (int)$_POST['b'];
            break;
        case '-':
            $result = (int)$_POST['a'] - (int)$_POST['b'];
            break;
        case '*':
            $result = (int)$_POST['a'] * (int)$_POST['b'];
            break;
        case '/':
            if ((int)$_POST['b'] == 0){
                $result = "<b>Ошибка. Деление на 0!</b>";
            }else{
                $result = (int)$_POST['a'] / (int)$_POST['b'];
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
    <title>Калькулятор</title>
</head>
<body>
<p><a href="index.php">На главную</a></p>
<h2>Кнопочный калькулятор</h2>
<?php
    if (isset($_POST['a']))
        $a = $_POST['a'];
    else $a = "";
    if (isset($_POST['b']))
        $b = $_POST['b'];
    else $b = "";
?>

<form method="post">
    <label>
        <b>a</b>
        <input type="text" name="a"  size="10" value="<?php echo $a;?>">
    </label>
    <label>
        <b>b</b>
        <input type="text" name="b"  size="10" value="<?php echo $b;?>">
    </label>
    =
    <b><?php echo $result;?></b>
    <br>&nbsp;&nbsp;
        <input type="submit" name="operations" value="+">
        <input type="submit" name="operations" value="-">
        <input type="submit" name="operations" value="*">
        <input type="submit" name="operations" value="/">
</form>
</body>
</html>