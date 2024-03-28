<?php
include 'conn.php';
session_start();

if(isset($_POST['student_logIn_process'])){
    $stud_email = $_POST['StudentEmailLogIn'];
    $stud_pass = $_POST['StudentPasswordLogIn'];
    
    $checkStudentAcc = "SELECT * FROM student_info WHERE email = '$stud_email'";
    $checkStudentQuery = mysqli_query($conn, $checkStudentAcc);
    $countStudent = mysqli_num_rows($checkStudentQuery);


    if($countStudent == 1){
        $rowData = mysqli_fetch_assoc($checkStudentQuery);
        $databaseStudentPassword = $rowData['sPassword'];

        if($databaseStudentPassword == $stud_pass){
            $_SESSION['student_id'] = $rowData['id'];
            $_SESSION['student_name'] = $rowData['fname'];
            $_SESSION['student_lname'] = $rowData['lname'];
            $_SESSION['student_section'] = $rowData['section'];
            // Optional: Store student's name in session

            echo '<script>alert("Welcome ' . $rowData['fname'] . '!"); window.location.href ="studentDash.php?id=' . $rowData['id'] . '";</script>';
        }else{
            echo '<script>alert("Incorrect password!"); window.location.href ="home.php";</script>';
        }
    }else{
        echo '<script>alert("No account found!"); window.location.href ="home.php";</script>';
    }
}
?>
