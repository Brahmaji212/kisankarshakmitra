<?php

include 'includes/PHPMailer.php';
include 'includes/SMTP.php';
include 'includes/Exception.php';




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer();

$mail-> isSMTP();

$mail-> Host = "smtp.gmail.com";

$mail->SMTPAuth= "true";

$mail -> SMTPSecure = "tls";

$mail -> Port = "587";

$mail -> Username = "brahmajig1999@gmail.com";

$mail->Password = "brahmaji212";

$mail -> Subject = " Your order is confirmed";

$mail ->setFrom("$email");

$mail ->Body = " Your Order_id=$order_id , product_name=$product_name , product_id=$product_id and expected delivery date is $delivery_date";

$mail ->addAddress("$email");

if ($mail->send())
{
    echo "email sent..!";
}
else
{
    echo "error";
}

$mail ->smtpClose();

?>