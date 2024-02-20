<?php
include "conn.php";



    if(isset($_POST['add_students'])){
        $idd = $_POST['stud_id'];
        $fn = $_POST['fname'];
        $ln = $_POST['lname'];
        $sec = $_POST['section'];
        $email = $_POST['email'];
        $pn = $_POST['phn_n'];
        $address = $_POST['addrss'];
        $age = $_POST['age'];
        $gen = $_POST['gender'];
        $dob = $_POST['date_b'];
        
    

        $insert = mysqli_query($conn,"INSERT INTO student_info VALUES
        ('$idd','$fn', '$ln', '$sec', '$email','$pn', '$address', '$age', '$gen', '$dob')");

        
        if($insert == true){
            
            ?>
            <script>
            alert("SIGN UP SUCESSFUL!");
            window.location.href ="home .php";
            </script>
            <?php   
        }else{
            ?>
            <script>
            alert("SIGN UP UNSUCCESSFUL! \n PLEASE TRY AGAIN!");
            window.location.href="home.php";
            </script>
            <?php
        }
    

    }
  


?>