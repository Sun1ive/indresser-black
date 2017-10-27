<?php 

$recepient = "info@indresser.com";
$recepient2 = "vi290983mal@gmail.com";
$sitename = "dresses.indresser.com";
$name = trim($_POST["user_name"]);
$email = trim($_POST["user_email"]);
$topic = trim($_POST["user_topic"]);
$text = trim($_POST["user_message"]);
$headers = "Content-type: text/html; charset=\"utf-8\"";

$message = "Имя: $name\nПочта: $email\nСообщение: $text";

$title = "Письмо с формы обратной связи \"$sitename\" на тему: \"$topic\"";

mail($recepient, $title, $message, $headers);
mail($recepient2, $title, $message, $headers);

header('location: https://dev.indresser.com');