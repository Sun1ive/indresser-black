<?php 

$recepient = "info@indresser.com";
$sitename = "dresses.indresser.com";
$email = trim($_POST["user_email"]);
$headers = "Content-type: text/html; charset=\"utf-8\"";

$message = "Почта: $email";

$title = "Заказ каталога с лендинга \"$sitename\" на почту: $email ";

mail($recepient, $title, $message, $headers);

header('location: https://dev.indresser.com');