<?php
date_default_timezone_set('Asia/Tomsk');

include 'classes/tg.php';

function deb($st){
	echo "<pre>";
	var_dump($st);
	echo "</pre>";
}

define('LANG','ru-RU');
define('TOKEN','1773023736:AAFXTsMDUH-2HdiWfe5qHUfUFeyEtfejPmM');
define('RECIPIENT','1815974380'); //1884812718

define('TITLE','Модель города в игровой форме для детей от 4 до 13 лет в Томске');
define('DESCRIPTION','Отличное качество обслуживания, широкий спектр мастер-классов и шоу-программ, даже для самого искушенного гостя.');

$telegram = new Telegram(TOKEN,RECIPIENT);

