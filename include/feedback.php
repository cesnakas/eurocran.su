<?php

if (
    (isset($_POST['name']) && $_POST['name'] != "")
    && (isset($_POST['phone']) && $_POST['phone'] != "")
    && (isset($_POST['page']) && $_POST['page'] != "")
) {
    $headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n"; //Наименование и почта отправителя
    $to = 'romangrin.web@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Заказ с сайта ' . $_SERVER['HTTP_HOST']; //Загаловок сообщения
    $headers  .= "Content-type: text/plain; charset=utf-8 \r\n"; //Кодировка письма

    $message = 'Имя: ' . htmlspecialchars($_POST['name']) . "\r\n";
    $message .= 'Телефон: ' . htmlspecialchars($_POST['phone']) . "\r\n";
    $message .= 'Заказ со страницы: ' . htmlspecialchars($_POST['page']) . "\r\n";

    if (!mail($to, $subject, $message, $headers)) {
        echo 'Технические неполадки при отправке сообщения. Пожалуйста, свяжитесь с нами по телефону.';
    } else {
        echo '1';
    }
} else {
    echo 'Пожалуйста, заполните все поля';
}
