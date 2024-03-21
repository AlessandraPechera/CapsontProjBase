<?php 
    
    include "conn.php";
     $ref_id = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM 
    questions WHERE id ='$ref_id'");
  
    if($delete == true){
        header("location: questionCreate.php");
    }else{
        header("location: questionCreate.php");
    }

?>
    