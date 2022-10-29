<?php

/***
    $Name = trim(htmlspecialchars($_POST['name']));
    $phone = trim(htmlspecialchars($_POST['Phone']));
    $email = trim(htmlspecialchars($_POST['Email']));
 ***/
// if (isset($_POST['tildaspec-formid'])) {

//     $to = 'newvolna01@yandex.ru'; //тут укажите почту для получения сообщений


//     $site = $_SERVER['HTTP_HOST'];
//     $dt = date("d F Y, H:i:s"); // дата и время
//     $formid = trim(htmlspecialchars($_POST['tildaspec-formid']));


//     $body = "<html><body style='font-family:Arial,sans-serif;'>";

//     $subject = "Заказ с сайта";
//     $body .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>
// 		Поздравляем, новый заказ с сайта :" . $site . "</h2>\n";

//     $body .= " <p><strong> Дата и  Время :</strong> " . $dt . "</p>\n ";
//     $body .= " <p><strong> Идентификатор формы :</strong> " . $formid . "</p>\n ";
//     if ($Name != '') {
//         $body .= " <p><strong> Имя :</strong> " . $Name . "</p>\n";
//     }
//     $body .= " <p><strong> Телефон :</strong> " . $phone . "</p>\n";

//     if ($email != '') {
//         $body .= " <p><strong> Email :</strong> " . $email . "</p>\n";
//     }


//     $headers = "From : SiteRobot <noreply@" . $_SERVER['HTTP_HOST'] . ">\n";
//     $headers .= 'Content-Type: text/html;charset=utf-8' . "\n";
//     $body .= "</body></html>\n";


//     // отправка сообщения
//     $sendmail = mail($to, $subject, $body, $headers);
//     if ($sendmail) {
//         // echo (true);
//         echo ('{"message":"OK"}');
//         header('location: thanks.html');
//         return;
//     } else {
//         echo "<script>alert(\"error.\");</script>";
//         echo (false);
//         return;
//     }
// }
// echo (" Поля не заполнены ");
