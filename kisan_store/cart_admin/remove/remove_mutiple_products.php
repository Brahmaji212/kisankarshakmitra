<?php
if(isset($_POST['submit'])){
    $check=isset($_POST['checkbox']);
    session_start();
    if($check){
   
    include 'database.php';
    
        $arr = $_POST["checkbox"];
     
        
        
    
      foreach($arr as $id){ 
        

        $removeqry = "delete from products where product_id=".$id;
        $sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
            
        if ($sql) :

            
            echo '<script>';
            echo 'alert("Removed Successfully");';
            echo 'window.location.href= "../products.php"';
            
            echo   '</script>';
        else :
            header('location : ../products.php');
        endif;


      
                            }
                        }
                        else 
                        echo '<script>';
                        echo 'window.location.href= "../products.php"';
                        echo '</script>';
                    }    
    else 
        header('location : ../products.php');





?>