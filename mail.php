<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='refresh' content='5; url=http://isti99.ru'>
	<meta charset="utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="/templates/isti99/css/style.css"/>
</head>
<body>
<div class="message-form">
<?php
if (isset($_POST['name'])) {$name = strip_tags($_POST['name']);}
if (isset($_POST['phone'])) {$phone = strip_tags($_POST['phone']);}


    if (empty($name) || empty($phone)) 
{echo "<p>Пожалуйста, заполните все поля.<br> <a href='/'>Нажмите,</a> чтобы вернуться к заполнению</p>";} 
else
{
$to = "i.sti.99@yandex.ru"; /*Укажите ваш адрес электоронной почты*/
$headers = "Content-type: text/plain; charset = utf-8";
$subject = "Сообщение с вашего сайта";
$message = "Имя пославшего: $name \nТелефон: $phone";
$send = mail ($to, $subject, $message, $headers);

if ($send == 'true')
{
echo "<p>Спасибо за отправку вашего сообщения!<br> <a href='/'>Нажмите,</a> чтобы вернуться на главную страницу. Или Вы автоматически вернетесь на главную через 5 секунд</p>";
}
else 
{
echo "<p>Сообщение не отправлено!</p>";
}
}

?>
</div>
</body>
</html>