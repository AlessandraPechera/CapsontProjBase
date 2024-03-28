<?php
    include "conn.php";
    session_start();


    if(isset($_POST['submitExamSent'])){
        $answer1 = $_POST['qop'];


        $insert = mysqli_query($conn,"INSERT INTO examsent VALUES
        ('0','$answer1')");

        
        if($insert == true){
            header("location: studentDash.php");
        }
        else{
            header("location: takeExam.php");
        }


    }
?>