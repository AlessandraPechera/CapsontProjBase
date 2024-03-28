<?php
include 'conn.php';
session_start();

if(isset($_POST['admin_logIn_process'])){
    $admin_email = $_POST['AdminEmailLogIn'];
    $admin_password = $_POST['AdminPasswordLogIn'];
    
    $checkAdminAcc = "SELECT * FROM admin_ui WHERE admin_Email = '$admin_email'";
    $checkAdminQuery = mysqli_query($conn, $checkAdminAcc);
    $countAdmin = mysqli_num_rows($checkAdminQuery);

    if($countAdmin == 1){
        $rowData = mysqli_fetch_assoc($checkAdminQuery);
        $databaseAdminPassword = $rowData['admin_Password'];

        if($databaseAdminPassword == $admin_password){
            $_SESSION['admin_id'] = $rowData['admin_Id'];
            $_SESSION['admin_name'] = $rowData['admin_fName'];

            echo '<script>alert("Welcome ' . $rowData['admin_fName'] . '!"); window.location.href ="dashboard.php";</script>';
        }else{
            echo '<script>alert("Incorrect password!"); window.location.href ="home.php";</script>';
        }
    }else{
        echo '<script>alert("No account found!"); window.location.href ="home.php";</script>';
    }
}
?>
