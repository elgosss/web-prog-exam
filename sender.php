<?php
    if (isset($_GET['submit'])) {
        $name = $_GET['fb_name'];
        $surname = $_GET['fb_surname'];
        $phone = $_GET['fb_phone'];
        $email = $_GET['fb_email'];
        $text = $_GET['fb_text'];

        $to = "e.s.gorohova@gmail.com"; 
        $subject = "Обратная связь";

        $msg="
        Имя: $name /n
        Фамилия: $surname /n
        Телефон: $phone /n
        Адрес эл. почты: $email /n
        Сообщение: $text"; 	
        mail($to, $subject, $msg, "Content-type: text/plain; charset=\"utf-8\"\n From: $to");
    }
    
?>
