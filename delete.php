<?php 
    
    include "conn.php";
     $ref_id = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM 
    student_info WHERE id='$ref_id'");
  
    if($delete == true){
        header("location: table.php");
    }else{
        header("location: table.php");
    }

?>
    