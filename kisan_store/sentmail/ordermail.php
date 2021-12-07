
<?php

include 'includes/PHPMailer.php';
include 'includes/SMTP.php';
include 'includes/Exception.php';




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// $source='C:\\xampp\htdocs\\kkm\\kisan_store\\cart_admin\\backend\\images\\".$row["product_name"]"';
// $dest='C:\\xampp\\htdocs\\kkm\\kisan_store\\sentmail\\img\\".$row["product_name"]"';
// echo rename($source,$dest) ? "OK" : "Error";

$mail = new PHPMailer();

$mail-> isSMTP();

$mail-> Host = "smtp.gmail.com";

$mail->SMTPAuth= "true";

$mail -> SMTPSecure = "tls";

$mail -> Port = "587";

$mail -> Username = "brahmajig1999@gmail.com";

$mail->Password = "brahmaji212";

$mail -> isHTML(true);

$mail -> addAttachment($dest,$product_name);

$mail -> Subject = "Your order is confirmed";

$mail ->setFrom("brahmajig1999@gmail.com");

$mail ->Body = " 
<html>
    <head> 
        <title>email testing </title>
    </head>
    <body>
    
    Your Order_id=$order_id, <br>
    product_name=$product_name, <br>
    product_id=$product_id,  <br>
    and expected delivery date is $delivery_date
    
    
    
    
    </body>
</html>

";

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
