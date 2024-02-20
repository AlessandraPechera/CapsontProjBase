<?php 
    
    include "conn.php";
     $ref_id = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM 
    examcategory WHERE id ='$ref_id'");
  
    if($delete == true){
        ?>
        <script>
        alert("Data is deleted!");
        window.location.href ="createExam.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("Data is not deleted! \n Please try again");
        window.location.href="createExam.php";
        </script>
        <?php
    }

?>
    