<?php
if(isset($_POST['submit'])){
    $check=isset($_POST['checkbox']);
    session_start();
   if($check){
    include 'database.php';
    
        $arr = $_POST["checkbox"];
        
      foreach($arr as $id){ 
        

        $removeqry = "delete from cart_super_admin where id=".$id;
        $sql = mysqli_query($dbc, $removeqry) or die(mysqli_error($dbc));
            
        if ($sql) :

            
            echo '<script>';
            echo 'alert("Admins Removed Successfully");';
            echo 'window.location.href= "../super_admin.php"';
            
            echo   '</script>';
        else :
            header('location : ../super_admin.php');
        endif;

    }
      
    }
    else
    echo '<script>';
    echo 'window.location.href= "../super_admin.php"';
    echo '</script>';
}
    else 
        header('location : ../super_admin.php');





?>