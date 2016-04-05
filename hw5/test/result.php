<?php
session_start();

if (isset($_SESSION['sColor'])) {
    $sStyle = $_SESSION['sColor'];
} else {
    $sStyle = 'green';
}

$iResult = "0";
$sMessage = "";
if (!empty($_SESSION['answ1']) && !empty($_SESSION['answ2']) && !empty($_SESSION['answ3']) && !empty($_SESSION['answ4'])){
    if ($_SESSION['answ1'] == 6) $iResult += 1;
    if ($_SESSION['answ2'] == 180) $iResult += 1;
    if ($_SESSION['answ3'] == "Канберра") $iResult += 1;
    if ($_SESSION['answ4'] == "Нил") $iResult += 1;
    unset($_SESSION['answ1']);
    unset($_SESSION['answ2']);
    unset($_SESSION['answ3']);
    unset($_SESSION['answ4']);
    if ($iResult >= 3) {
        $sMessage = "Вы отлично справились с тестом! Ваш результат $iResult из 4";
    }elseif ($iResult == 2) {
        $sMessage = "Вы еле-еле справились с тестом! Ваш результат $iResult из 4.<br> В следующий раз будьте внимательнее";
    }else {
        $sMessage = "Вы провалили тест! Ваш результат $iResult из 4. :(";
    }
} else $sMessage = "При обработке результатов теста произошла ошибка. Пройдите тест заново"

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результаты теста</title>
    <link rel="stylesheet" href="../css/<?php echo $sStyle;?>.css">
</head>
<body>
<h2>
    <?php echo $sMessage; ?>
    <p><a href="../index.php">Вернуться на сайт</a> </p>
</h2>

<!--<pre>-->
<!--     System info:-->
<!--    --><?php //var_dump($GLOBALS);?>
<!--</pre>-->
</body>
</html>
