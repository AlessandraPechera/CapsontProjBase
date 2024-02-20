<?php
include "conn.php";

$ref_id = $_GET['id'];


if(isset($_POST['add_Exam'])){
    $examName = $_POST['exam_name'];
   
    $insert = mysqli_query($conn,"INSERT INTO examcategory  VALUES
    ('0','$examName')");

    
    if($insert == true){
        
        ?>
        <script>
        alert("Exam created!");
        window.location.href ="createExam.php";
        </script>
        <?php   
    }else{
        ?>
        <script>
        alert("Data is not Inserted! \n Please try again");
        window.location.href="createExam.php";
        </script>
        <?php
    }


}


if(isset($_POST['edit_Exam'])){

    $i = $_POST['exam_nameEdit'];
  

    $update_exam = mysqli_query($conn, "UPDATE examcategory SET e_Name  ='$i' WHERE id='$ref_id'");
    
     if($update_exam == true){
      ?>
        <script>
        alert("Data is updated!");
        window.location.href ="createExam.php";
        </script>
        <?php
       
    }

    
    else{
         ?>
        <script>
        alert("Data is not Inserted! \n Please try again");
        window.location.href="editExam.php";
        </script>
        <?php
    }

}


?>