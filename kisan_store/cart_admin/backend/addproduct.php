<?php 
include 'database.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
 //path setting to store image

 $filename = $_FILES["fileInput"]["name"];
 $tempname = $_FILES["fileInput"]["tmp_name"];	
   $folder = "images/".$filename;

 //$target = "kisan_store/cart_admin/backend/images/".basename($_FILES['fileInput']['name']) ;

  $proname = $_POST['name'];
  $prodescript = $_POST['description'];
  $procategory = $_POST['category'];
  $prosubcategory=$_POST['sub_category'];
  $proexpdate = $_POST['expire_date'];
  $prounitstock = $_POST['stock'];
  $price = $_POST['price'];
  //$proimage = $_FILES['fileInput']['name'];
  

 

  if (move_uploaded_file($tempname, $folder)) {
    $query = "INSERT INTO `products`( `product_name`, `product_description`, `product_category`, `product_subcategory`, `product_exp_date`, `product_stock`, `product_img`, `product_price`) VALUES ('$proname', '$prodescript', '$procategory','$prosubcategory', '$proexpdate', '$prounitstock','$filename' ,'$price')";
    $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
    $_SESSION['category']=$procategory;
  }else{
    echo '<script>';
    echo 'alert("image not upload");';
    echo 'window.location.href= "../add-product.html"; 
          </script>';
  }
      if($sql) {
    //session_start();
    //$_SESSION['product']=$proname;
    echo '<script>';
    echo 'alert("Submitted Successfully");';
    echo 'window.location.href= "../products.php"; 
          </script>';
  }else{
    echo '<script>';
    echo 'alert("Unable To Submit Details");';
    echo 'window.location.href= "../add-product.html"; 
          </script>';
  }

}

$dbc->close();
?>