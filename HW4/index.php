<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ДЗ №4.Павлова Елена</title>
</head>
<body>
    <h1>Домашняя работа №4</h1>
    <h2>Пункт 1</h2>
    <h3>Галерея изображений</h3>
    <?php
        for ($i=1; $i <= 4; $i++){
            echo "<a href = photo.php?id=$i >Картинка №$i</a><br>";
        }
    ?>
    <br>
    <h3>Отправка формы</h3>
    <a href="sum.php">Перейти к форме сумматора</a>
    <br><hr><h2>Пункт 2</h2>
    <a href="calc.php">Перейти к форме калькулятора</a>

    <br><hr><h2>Пункт 3*</h2>
    <a href="calc2.php">Перейти к форме кнопочного калькулятора</a>

    <br><hr><h2>Дополнительное задание</h2>
    <a href="dop.php">Перейти к форме доп. задания</a>

</body>
</html>
