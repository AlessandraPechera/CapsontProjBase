<?php
    include "conn.php";
    session_start();


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
            header("location: table.php");
        }
        else{
            header("location: form.php");
        }


    }

    if(isset($_POST['update_student'])){
        $ref_id = $_GET['id'];

        $x = $_POST['update_id'];
        $a = $_POST['update_fname'];
        $b = $_POST['update_lname'];
        $c = $_POST['update_section'];
        $d = $_POST['update_email'];
        $e = $_POST['update_phn_n'];
        $f = $_POST['update_addrss'];
        $g = $_POST['update_age'];
        $h = $_POST['update_gender'];
        $i = $_POST['update_date_b'];

        $update_student = mysqli_query($conn, "UPDATE student_info SET id = '$x', fname ='$a', lname= '$b', section='$c', 
        email='$d', phn_n='$e', addrss='$f', age='$g', gender='$h', date_b='$i' WHERE id='$ref_id'");
        
         if($update_student == true){
            header("location: table.php");
           
        }
        else{
            header("location: update.php");
        }
    }
    



?>