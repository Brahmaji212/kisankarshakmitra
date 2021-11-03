
<?php 
include 'database.php';
session_start();
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  
 //path setting to store image


 $id=$_SESSION['product_id'];
 $filename = $_FILES["fileInput"]["name"];
 $tempname = $_FILES["fileInput"]["tmp_name"];	
 $folder = "images/".$filename;

 

  $proname = $_POST['name'];
  $prodescript = $_POST['description'];
  $procatgory = $_POST['category'];
  $proexpdate = $_POST['expire_date'];
  $prounitstock = $_POST['stock'];
  $price = $_POST['price'];

  

  



  if (move_uploaded_file($tempname, $folder)) {
   
    $query = "UPDATE `products` SET `product_name` = '$proname', `product_description` = '$prodescript', `product_category` = '$procatgory', `product_exp_date` = '$proexpdate', `product_stock` = '$prounitstock', `product_img` = '$filename', `product_price` = '$price' WHERE `products`.`product_id` = '$id'";
    $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
  
  }else{


    $query = "UPDATE `products` SET `product_name` = '$proname', `product_description` = '$prodescript', `product_category` = '$procatgory', `product_exp_date` = '$proexpdate', `product_stock` = '$prounitstock', `product_price` = '$price' WHERE `products`.`product_id` = '$id'";
    $sql = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
   
  }
      if($sql) {
    //session_start();
    //$_SESSION['product']=$proname;
    echo '<script>';
    echo 'alert("Updated Successfully");';
    echo 'window.location.href= "../products.php"; 
          </script>';
  }else{
    echo '<script>';
    echo 'alert("Unable To Submit Details");';
    echo 'window.location.href= "../edit-product.php"; 
          </script>';
  }

}

$dbc->close();
?>

















