<?php 

$recepient = "info@indresser.com";
$recepient2 = "vi290983mal@gmail.com";
$sitename = "dresses.indresser.com";
$email = trim($_POST["user_email"]);
$headers = "Content-type: text/html; charset=\"utf-8\"";

$message = "Почта: $email";

$title = "Заказ каталога с лендинга \"$sitename\" на почту: $email ";

mail($recepient, $title, $message, $headers);
mail($recepient2, $title, $message, $headers);

header('location: https://dresses.indresser.com');