<?php
$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass)) {
	echo "Не введены полностью данные";
} 
else {
	if($login == "Руслан" && $pass == "123"){echo "Welcom Руслан";}
	else { echo "неверный пароль";}
}