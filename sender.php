<?php
    $name = $_POST['fb_name'];
    $surname = $_POST['fb_surname'];
	$phone = $_POST['fb_phone'];
    $email = $_POST['fb_email'];
    $text = $_POST['fb_text'];

	$to = "e.s.gorohova@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Обратная связь";

	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Адрес эл. почты: $email /n
    Сообщение: $text"; 	
	mail($to, $subject, $msg, "From: $from ");
?>

<p>Привет, форма отправлена</p>
