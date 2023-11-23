<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpMailer/src/Exception.php';
require './phpMailer/src/PHPMailer.php';
require './phpMailer/src/SMTP.php';


$parent_name = $_POST['parent_name'];
$email = $_POST['email'];

$mail = new PHPMailer(true);
    
$mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->Host = 'smtp.titan.email';
$mail->Host = 'smtp.hostinger.com';
$mail->SMTPAuth = true;
$mail->Username = 'info@aarambhtutorials.com';
$mail->Password = 'Shivam@134';
$mail->SMTPSecure = 'ssl';
$mail->Port= 465;
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'deepakbaradwaj933@gmail.com';
// $mail->Password = 'sjkosmmlnbabblmm';
// $mail->SMTPSecure = 'ssl';
// $mail->Port= 465;
// 
$mail->setFrom('info@aarambhtutorials.com', 'ARAMBH');


$mail->addAddress($email);
$mail->addBCC('ashutoshtiwari9453@gmail.com', 'new customer details');

$mail->isHTML(true);

$mail->Subject = 'Qoute from Arambh';

$mail->Body =  '
<table>
<tr style="">
<td>'.$parent_name.' Thank you for fill the form .
We will call you as soon as possible.</td>
</tr>
</table>


';




if(!$mail->send()){
    echo json_encode(['status'=>500]);
   }else{
       echo json_encode(['status'=>200]);
   }
   ?>
