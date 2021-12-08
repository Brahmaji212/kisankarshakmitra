<?php
session_start();
$username=$_SESSION['loginname'];
include '../FPDF/fpdf.php';

$server= "localhost";
$username= "root";
$password= "";
$db= "kkm";

// $dbc=new PDO('mysql:host='.$server.';dbname='.$db.','.$username.'');
// $database= new mysqli($server, $username, $password, $db);
$dbc = new mysqli('localhost', 'root', '', 'kkm');

if(!$dbc){
    die("Unable to connect please, try again later:".mysqli_connect_error());
    exit();
}






class myPDF extends FPDF
{
    function head()
    {
        $this ->Ln(20);
        $this ->Cell(7);
        $this ->SetFont('Arial','B',14);
        $this ->Cell(50,10,'INVOICE NUMBER',0,0,'C');
        $this ->Cell(50,10,'DATE OF ISSUE',0,0,'C');
        $this->Ln();
    }
    function viewhead()
    {
        $invoice_date=rand(1000,10000);
        $date=date("d/m/Y");

        $this ->Cell(7);
        $this ->SetFont('Arial','',12);
        $this ->Cell(50,10,$invoice_date,0,0,'C');
        $this ->Cell(50,10,$date,0,0,'C');
        $this ->Ln(50);
    }
    function header()
    {
    $this -> Image('img/kkm-logo.png',10,6,25,25);
    $this ->SetFont('Arial','B',14);
    $this -> Cell(276,5,'Product Invoice',0,0,'C');
    $this ->Ln();
    $this ->SetFont('Times','',12);
    $this ->Cell(276,10,'Order details of customer',0,0,'C');
    $this ->Ln(20);
    }
    function footer()
    {
        $this ->SetY(-15);
        $this ->SetFont('Arial','',8);
        $this ->Cell(0,10,'page'.$this ->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable()
    {
        $this ->SetFont('Times','B',12);
        $this->Cell(20);
        $this ->Cell(40,10,'ORDER ID',1,0,'C');
        $this ->Cell(40,10,'PRODUCT NAME',1,0,'C');
        $this ->Cell(40,10,'PRODUCT IMAGE',1,0,'C');
        $this ->Cell(40,10,'QUANTITY',1,0,'C');
        $this ->Cell(40,10,'UNIT PRICE',1,0,'C');
        $this ->Cell(40,10,'TOTAL AMOUNT',1,0,'C');
        

        $this ->Ln();

    }
    function viewTable($dbc)
    {
        $username=$_SESSION['loginname'];
     
        $this ->SetFont('Times','',12); 
        $select = "select * from order_details where user_id='$username' and token='booked now'";
        $result = $dbc->query($select);       
        while($row = $result->fetch_object()){
            $select1="select *from products where product_id=".$row->product_id."";
            $result1=$dbc->query($select1);
            $row1=$result1->fetch_object();
        $this ->Cell(20);
        $this ->Cell(40,30,$row->order_id,1,0,'C');
        $this ->Cell(40,30,$row1->product_name,1,0,'C');
        $this->Cell(40,30,$this->Image('cart_admin/backend/images/'.$row1->product_img.'', $this->GetX()+7, $this->GetY()+2, 25.78),1,0,'C');
        $this ->Cell(40,30,$row->quantity,1,0,'C');
        // $this ->Cell(50,30,$this-> Image('cart_admin/backend/images/'.$row1->product_img.'',225,125,25,25),1,0,'C');
        // $this -> ;
        $this ->Cell(40,30,$row1->product_price,1,0,'C');
        $this ->Cell(40,30,$row->total,1,0,'C');
            
        $this->Ln();
}
      
    }

} 



$pdf = new myPDF();
$pdf -> AliasNbPages();
$pdf ->AddPage('L','A4',0);
$pdf ->head();
$pdf ->viewhead($dbc);
$pdf ->headerTable();
$pdf ->viewTable($dbc);


if($sqlupdate_orders)
{
    echo "executed";
}
else
{
    echo "not";
}
$pdf -> Output('F','sentmail/img/invoice.pdf');


?>

<!-- https://youtu.be/6aj_T2cX7RY -->


<html>
    <body>
        <img src="" alt="">
    </body>
</html>