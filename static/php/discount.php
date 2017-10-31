<?php 

$recepient = "info@indresser.com";
$recepient2 = "vi290983mal@gmail.com";
$sitename = "dresses.indresser.com";
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$headers = "Content-type: text/html; charset=\"utf-8\"";



$message = "Имя: $name\nТелефон: $phone";

$title = "Заказ консультации с лендинга \"$sitename\" ";

mail($recepient, $title, $message, $headers);
mail($recepient2, $title, $message, $headers);


header('location: https://dresses.indresser.com');