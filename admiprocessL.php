<?php
  include "conn.php";
  session_start();

  if(isset($_POST['admin_logIn_process'])){

//Declare variables for database

      $admin_email = $_POST['AdminEmailLogIn'];
      $admin_password = $_POST['AdminPasswordLogIn'];
    
//validation
$checkAdminAcc = "SELECT * FROM admin_ui WHERE admin_Email = '$admin_email'";
$checkAdminQuery = mysqli_query($conn,$checkAdminAcc);
$countAdmin = mysqli_num_rows($checkAdminQuery);


if($countAdmin == 1){
    $rowData = mysqli_fetch_assoc($checkAdminQuery);
    $databaseAdminPassword = $rowData['admin_Password'];


    if($databaseAdminPassword == $admin_password){

      ?>
      <script>
      alert("Welcome <?php echo $rowData['admin_fName'];?>!");
      window.location.href ="dashboard.php";
      </script>
      <?php
    }else{
      
      ?>
      <script>
      alert("Inccorrect password!");
      window.location.href ="home.php";
      </script>
      <?php

    }
  
  
  }else{
    ?>
    <script>
    alert("No account found!");
    window.location.href ="home.php ";
    </script>
    <?php


}




  }


?>
  