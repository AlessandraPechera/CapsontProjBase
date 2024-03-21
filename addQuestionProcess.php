<?php
include "conn.php";
    session_start();

if(isset($_POST['submitl'])){   
    $exam_category = $_POST['inputCategory'];
    $inp_q = $_POST['inputQuestion'];
    $inp_Op1 = $_POST['inputOption1'];
    $inp_Op2 = $_POST['inputOption2'];
    $inp_Op3 = $_POST['inputOption3'];
    $inp_Op4 = $_POST['inputOption4'];
    $inp_Ans = $_POST['inputAnswer'];
   
   
    
    

    $insert = mysqli_query($conn,"INSERT INTO questions VALUES
    ('0','$inp_q','$inp_Op1', '$inp_Op2', '$inp_Op3','$inp_Op4', '$inp_Ans','$exam_category')");

    
    if($insert == true){
        header("location: questionCreate.php");
    }else{
        header("location: questionCreate.php");
    }

}


  if(isset($_POST['submitEdit'])){
        $ref_id = $_GET['id'];

        $idd =$_POST['idd'];
        $q = $_POST['editQ'];
        $q1 = $_POST['editQ1'];
        $q2 = $_POST['editQ2'];
        $q3 = $_POST['editQ3'];
        $q4 = $_POST['editQ4'];
        $ans = $_POST['editAns'];
        $cate = $_POST['categ'];
        
       
        $update_questions = mysqli_query($conn, "UPDATE questions SET question='$q', q_op1 ='$q1', q_op2= '$q2', q_op3='$q3', 
        q_op4 ='$q4', correct_option='$ans' WHERE id='$ref_id'");
        
         if($update_questions == true){
            
            header("location: questionCreate.php");
           
        }
        else{
  
            header("location: editquestion.php");
        }
    }
  

?>