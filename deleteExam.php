<?php 
    
    include "conn.php";
     $ref_id = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM 
    examcategory WHERE id ='$ref_id'");
  
    if($delete == true){
      
        header("location: createExam.php");
       
    }else{
        header("location: createExam.php");
    }

?>
    