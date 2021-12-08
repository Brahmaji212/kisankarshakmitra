<?php

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
        $invoice_date=rand(1000,2000);
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
        $this->Cell(10);
        $this ->Cell(50,10,'ORDER ID',1,0,'C');
        $this ->Cell(50,10,'PRODUCT ID',1,0,'C');
        $this ->Cell(50,10,'BOOKING DATE',1,0,'C');
        $this ->Cell(50,10,'DELIVERY DATE',1,0,'C');
        $this ->Cell(50,10,'PRODUCT IMAGE',1,0,'C');
        $this ->Ln();

    }
    function viewTable($dbc)
    {
     
        $this ->SetFont('Times','',12); 
        $select = "select * from order_details";
        $result = $dbc->query($select);       
        while($row = $result->fetch_object()){
        $this ->Cell(10);
        $this ->Cell(50,10,$row->order_id,1,0,'C');
        $this ->Cell(50,10,$row->product_id,1,0,'C');
        $this ->Cell(50,10,$row->booking_date,1,0,'C');
        $this ->Cell(50,10,$row->delivery_date,1,0,'C');
        $this ->Cell(50,10,'PRODUCT IMAGE',1,0,'C');
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
$pdf -> Output();

?>

<!-- https://youtu.be/6aj_T2cX7RY -->


<html>
    <body>
        
    </body>
</html>