<?php
include ("conn.php");

session_start();



if(isset($_POST['submit_fb'])){
    $fb_n = $_POST['fb_name'];
    $fb_e = $_POST['fb_email'];
    $fb_sub = $_POST['subject'];
    $fb_message = $_POST['message'];

    $insert = mysqli_query($conn,"INSERT INTO feedback VALUES
    ('','$fb_n','$fb_e', '$fb_sub', '$fb_message')");


        
if($insert == true){
    ?>
    <script>
    alert("Feedback Sent!");
    window.location.href ="home.html";
    </script>
    <?php   
}else{
    ?>
    <script>
    alert("Feedback not sent! \n Please try again");
    window.location.href="home.html";
    </script>
    <?php
}


}



?>