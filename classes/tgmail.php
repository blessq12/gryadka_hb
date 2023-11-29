<?php
date_default_timezone_set('Asia/Tomsk');
$date = date('d/m/y');
if (!empty($_POST)){
    $text = "Место: {$_POST['place']} \nИмя родителя: {$_POST['parent-name']} \n Имя и возраст ребенка: {$_POST['child']['name']}/{$_POST['child']['age']} лет\nСтоимость: {$_POST['price']}\nТелефон: {$_POST['phone']}\nДата: {$date}";
}

$token = '1773023736:AAFXTsMDUH-2HdiWfe5qHUfUFeyEtfejPmM';
$recipient = '1884812718';

$mailtelegram = urlencode($text);
$send = file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$recipient&text=$mailtelegram");

if ($send){
    header('Location:http://' .$_SERVER['HTTP_HOST']);
} else {
    echo 'Произошла ошибка при отправке, попробуйте снова';
}