<?php
if(isset($_POST['submit'])){
    session_start();
   
    include 'database.php';
    
        $id1 = $_POST["checkbox"];
        $extra =implode(',' , $id1);
        echo $extra;
    
      foreach($id1 as $id){
        

        $removeqry = "delete from  store_customer_registration where user_id=".$id;
        $sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
            
        if ($sql) :

            
            echo '<script>';
            // echo 'alert("Removed Successfully");';
            // echo 'window.location.href= "../Regusers.php"';
            
            echo   '</script>';
        else :
            header('location : ../Regusers.php');
        endif;


      
    }
}
    else 
        header('location : ../Regusers.php');





?>