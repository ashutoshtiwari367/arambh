<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpMailer/src/Exception.php';
require './phpMailer/src/PHPMailer.php';
require './phpMailer/src/SMTP.php';


$name_tutor = $_POST['name_tutor'];
$last_qualification = $_POST['last_qualification'];
$teaching_experience = $_POST['teaching_experience'];

$phone_no = $_POST['phone_no'];
$upto_class = $_POST['upto_class'];
$tutor_area = $_POST['tutor_area'];
$which_board = $_POST['which_board'];
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
$mail->addBCC('nidhipal1809@gmail.com', 'new customer details');
$mail->addBCC('shivampal1203@gmail.com', 'new customer details');

$mail->isHTML(true);

$mail->Subject = 'Qoute from Arambh';

$mail->Body =  '
<body style="background-color: black;">
    <div><h1 style="text-align: center; background-color: black; color: white; height: auto wid
    80%; padding: 3%;">AARAMBH</h1></div>
    <table style="margin: auto; align-items:center; justify-content: center;">
        <tr style=" font-size: larger; color: white;">
        <td> Thank you for fill the form .
        We will call you as soon as possible.</td>
        </tr>
        </table>
        <h1 style="color: white; text-align: center;">Your details</h1>
        <table style="margin: auto; width: 100%; text-align: center; font-size: larger;">
            <tbody style="color: white;">
            <tr>
                <td>Parents name</td>
                <td>'$name_tutor.'</td>
              
            </tr>
            <tr>
                <td>Student name</td>
                <td>'.$last_qualification.'</td>
              
            </tr>
            <tr>
                <td>Class</td>
                <td>'.$upto_class.'</td>
              
            </tr>
            <tr>
                <td>School</td>
                <td>'.$tutor_area.'</td>
              
            </tr>
            <tr>
                <td>Address</td>
                <td>'.$which_board.'</td>
              
            </tr>
            
            </tbody>
        </table>
        <p style="color: white; text-align: center;">Thank you</p>
</body>


';




if(!$mail->send()){
    echo json_encode(['status'=>500]);
   }else{
       echo json_encode(['status'=>200]);
   }
   ?>
