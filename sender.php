<?php
    $name = trim($_POST['fb_name']);
    $surname = trim($_POST['fb_surname']);
	$phone = trim($_POST['fb_phone']);
    $email = trim($_POST['fb_email']);
    $text = trim($_POST['fb_text']);

	$to = "e.s.gorohova@gmail.com"; 
	$subject = "Обратная связь";

	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Адрес эл. почты: $email /n
    Сообщение: $text"; 	
	mail($to, $subject, $msg, "From: $to");
?>
