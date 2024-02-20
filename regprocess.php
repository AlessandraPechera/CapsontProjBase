<?php
include "conn.php";

if(isset($_POST['reg_process'])){
    $admin_id = $_POST['AdminIdNumber'];
    $admin_fname = $_POST['AdminFirstName'];
    $admin_lname = $_POST['AdminLastName'];
    $admin_email = $_POST['AdminEmailSignUp'];
    $admin_password = $_POST['AdminPasswordSignUp'];
    $admin_subject = $_POST['AdminClassSubject'];
    $admi_phone = $_POST['AdminPhoneNumber'];

    $checkEmailstatement = "SELECT * FROM admin_ui WHERE 'admin_Email' ='$admin_email'";
    $checkEmailQuery = mysqli_query($conn, $checkEmailstatement);
    $counter = mysqli_num_rows($checkEmailQuery);
        

 
    if($counter == 0)
    {
 


    $insert = mysqli_query($conn,"INSERT INTO admin_ui VALUES
     ('$admin_id','$admin_fname','$admin_lname',
     '$admin_email',' $admin_password','$admin_subject',
     '$admi_phone')"); 
     

     ?>
     <script>
     alert("Welcome <?php echo $admin_fname;?>!");
     window.location.href ="dashoboard.html";
     </script>
     <?php
     
    
    }
    else
    {
        ?>
        <script>
        alert("Registration Failed!");
        window.location.href ="home.html";
        </script>
        <?php
    }

    

}











?>