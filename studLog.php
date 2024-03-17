<?php
  include 'c:\xampp\htdocs\frag3\conn.php';
  session_start();

  if(isset($_POST['student_logIn_process'])){

//Declare variables for database

      $stud_email = $_POST['StudentEmailLogIn'];
      $stud_pass = $_POST['StudentPasswordLogIn'];
    
//validation
$checkAdminAcc = "SELECT * FROM student_info WHERE email = '$stud_email'";
$checkAdminQuery = mysqli_query($conn,$checkAdminAcc);
$countAdmin = mysqli_num_rows($checkAdminQuery);


if($countAdmin == 1){
    $rowData = mysqli_fetch_assoc($checkAdminQuery);
    $databaseAdminPassword = $rowData['id'];


    if($databaseAdminPassword == $stud_pass){

      ?>
      <script>
      alert("Welcome <?php echo $rowData['fname'];?>!");
      window.location.href ="studentdash.php";
      </script>
      <?php
    }else{
      
      ?>
      <script>
      alert("Inccorrect password!");
      window.location.href ="home.html";
      </script>
      <?php

    }
  
  
  }else{
    ?>
    <script>
    alert("No account found!");
    window.location.href ="home.html";
    </script>
    <?php


}




  }


?>
  