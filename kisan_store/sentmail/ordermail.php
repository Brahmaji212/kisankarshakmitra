
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
// $source="cart_admin/backend/images/$product_img";
$source="sentmail/order_invoice/invoice.pdf";
$mail -> addAttachment($source,'Order Invoice');
// $dest="sentmail/img/invoice.pdf";
// $mail -> addAttachment($dest,'invoice');
$mail -> Subject = "$first_name ,Your order is confirmed ";

$mail ->setFrom("brahmajig1999@gmail.com");

$mail ->Body = " 
<html>
    <head> 
        <title>email testing </title>
        <style>
        div .invoice
        {
            color:green;
        }
        </style>
    </head>
    
    <body >
    <div class='invoice'>

    Your Order id=$order_id, <br>
    product name=$product_name, <br>
    product id=$product_id,  <br>
    booking date = $booking_date, <br>
    and expected delivery date is $delivery_date.
    </div>
    
    
    
    </body>
</html>

";
// $dest="cart_admin/backend/images/$product_img";
// $source="sentmail/img/$product_img";

// if( !rename($source, $dest) ) {  
//     echo "File can't be moved!";  
// }  
// else {  
//     echo "File has been moved!";  
// }

$mail ->addAddress("$email");

if ($mail->send())
{
   
 
}
else
{
    
}

$mail ->smtpClose();

?>
