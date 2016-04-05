<?php
$mailto = "fox67rus@mail.ru";
$charset = "windows-1251";
$subject = "Имя письма";
$content = "text/html";
$status="<br>";
if (!empty($_POST))
{
    $name = htmlspecialchars(stripslashes($_POST['imko']));
    $message = htmlspecialchars(stripslashes($_POST['tikstik']));
    $mail = htmlspecialchars(stripslashes($_POST['posta']));

    if(empty($_POST['posta']))
    {
        $status = "Вы не указали свой E-mail!";
    }
    elseif (!preg_match("/^[0-9a-z_\.]+@[0-9a-z_^\.]+\.[a-z]{2,6}$/i", $mail))
    {
        $status = "Вы ввели некорректный E-mail!";
    }
    else
    {
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: ".$content." charset=".$charset."\r\n";
        $headers .= "From: \"".$name."\" <".$mail.">\r\n";
        $headers .= "Bcc: vashe_milo2@yaya.ru\r\n";
        $headers .= "X-Mailer: E-mail from my super-site \r\n";
        $sendmessage = "<html><body>
         <p><b>E-mail для связи:</b> ".$mail."</p>
         <p><b>Сообщение:</b> ".$message."</p>
         </body></html>";
        if (mail($mailto,$subject,$sendmessage,$headers))
        {
            unset($name, $mail, $message);
            $status = "Ваше сообщение отправлено!";
        }
        else
        {
            $status = "По техническим причинам сообщение не было отправлено. Попробуйте снова, а если не получится, обратитесь к разработчикам";
        }
    }
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <form method='post' name='formname'>
        <p>
            <label for="imko">Контактное лицо:</label><br>
            <input name="imko" maxlength="50" type="text" size="10">
        </p>
        <p>
            <label for="posta">Почта для связи:</label><br>
            <input name="posta" type="text" size="10" value="">
        </p>
        <p>
            <label for="tikstik">Сообщение:</label><br>
            <textarea rows="5" cols="14" name="tikstik"></textarea>
        </p>
        <p>
            <input name="submit" type="submit" value="Отправить">
        </p>
    </form>
    <?=$status;?>
    </body>
    </html>
