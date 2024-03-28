<?php 
    
    include "conn.php";
     $ref_id = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM 
    student_info WHERE id='$ref_id'");
    $delete1 = mysqli_query($conn, "DELETE FROM 
    student_scores WHERE student_id='$ref_id'");
  
    if($delete == true && $delete1 == true){
        header("location: table.php");
    }else{
        header("location: table.php");
    }

?>
    