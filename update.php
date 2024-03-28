<?php
    session_start();
    include "conn.php";
    if(!isset($_SESSION['admin_id'])){
        header("Location: home.php");
        exit();
    }
    if(!isset($_SESSION['admin_id'])){
        header("Location: home.php");
        exit();
    }

    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM 
    student_info WHERE id='$ref_id'");

    while ($d=mysqli_fetch_object($getdata)){
        $id = $d -> id;
        $fn = $d -> fname;
        $ln = $d -> lname;
        $sec = $d -> section;
        $eml = $d -> email;
        $pas = $d -> sPassword;
        $phone = $d -> phn_n;
        $ads = $d -> addrss;
      
        $gen = $d -> gender;
        $dOb = $d -> date_b;

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register Students</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        
          <!-- MENU SIDEBAR-->
          <aside class="menu-sidebar d-none d-lg-block">
             <a class="logo" href="dashboard.php">
             <img src="images/uiLogo3.jpeg"  style="height:65%;">
                <h1>Admin</h1>
              </a>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="dashboard.php">
                               
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                              
                            </ul>
                        </li>
                       
                        <li>
                            <a href="table.php">
                                <i class="fas fa-table"></i>Student List</a>
                        </li>
                        <li>
                            <a href="form.php">
                                <i class="far fa-check-square"></i>Student Forms</a>
                        </li>
                    
                        <li>
                            <a href="questionCreate.php">
                                <i class="fas fa-calendar-alt"></i>Add Questions</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Exams</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <?php
                                            $getdata = mysqli_query($conn, "SELECT * FROM examcatgory");
                                            while ($row = mysqli_fetch_array($getdata)) {
                                                # code...
                                            
                                            ?>  
                                <li>
                                    <a href="exam1.php?id=<?php echo $row['examName'];?>"><?php echo $row['examName'];?></a>
                                </li><?php
                             }
                             ?>
                              <li>
                                <a href="createExam.php"> Create Exam</a>
                              <li> 
                            </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-user-circle""></i>Log out</a>
                        </li>
                        
                       
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->


        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <a class="logo" href="dashboard.php">
                          <h1>Admin</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                     
                 <li>   
                        <a class="js-arrow" href="dashboard.php">
                               
                               <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           <ul class="list-unstyled navbar__sub-list js-sub-list">
                             
                           </ul>
                 </li>
                 
                 <li>
                     <a href="table.php">
                         <i class="fas fa-table"></i>Student list</a>
                 </li>
                 <li>
                     <a href="form.php">
                         <i class="far fa-check-square"></i>Student Forms</a>
                 </li>
              
                 <li>
                            <a href="questionCreate.php">
                                <i class="fas fa-calendar-alt"></i>Add Questions</a>
                 </li>
                 <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Exams</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <?php
                                            $getdata = mysqli_query($conn, "SELECT * FROM examcatgory");
                                            while ($row = mysqli_fetch_array($getdata)) {
                                                # code...
                                            
                                            ?>  
                                <li>
                                    <a href="exam1.php?id=<?php echo $row['examName'];?>"><?php echo $row['examName'];?></a>
                                </li><?php
                             }
                             ?>
                             <li>
                                <a href="createExam.php"> Create Exam</a>
                             <li> 
                            </ul>
                        </li>
                 <li>
                            <a href="logout.php">
                                <i class="fas fa-user-circle"></i>Log out</a>
                 </li>
                        
                        
             </ul>
        </header>
        <!-- END HEADER MOBILE-->

      

        <!-- PAGE CONTAINER-->
        <div class="page-container">

                <!-- MAIN CONTENT-->
                <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">Student Form</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update Student's data</h3>
                                        </div>
                                        <hr>
                                        <form action="process2.php?id=<?php echo $ref_id;?>" method="post" novalidate="novalidate">
                                             
                                            <div class="form-group has-success">
                                                <label for="stud_id" class="control-label mb-1">Student's ID number</label>
                                                <input id="stud_id" name="update_id" type="text" class="form-control stud_id valid" 
                                                value="<?php echo $id;?>"
                                                value="<?php echo $id;?>"
                                                data-val="true" data-val-required="Enter Student's Id number"
                                                    autocomplete="stud_id" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="stud_id" data-valmsg-replace="true"></span>
                                            
                                            </div>


                                            <div class="form-group has-success">
                                                <label for="fname" class="control-label mb-1">First Name</label>
                                                <input id="fname" name="update_fname" type="text" class="form-control fname valid" data-val="true" data-val-required="Enter Student's first name"
                                                value="<?php echo $fn;?>"    
                                                autocomplete="fname" aria-required="true" aria-invalid="false" aria-describedby="fname-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="fname" data-valmsg-replace="true"></span>
                                            
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="lname" class="control-label mb-1">Last Name</label>
                                                <input id="lname" name="update_lname" type="text" class="form-control lname valid" data-val="true" data-val-required="Enter Student's last name"
                                                value="<?php echo $ln;?>"  
                                                autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="lname-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="lname" data-valmsg-replace="true"></span>
                                            
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="section" class="control-label mb-1">Section</label>
                                                <input id="section" name="update_section" type="text" class="form-control section valid" data-val="true" data-val-required="Enter Student's Section "
                                                value="<?php echo $sec;?>"  
                                                autocomplete="section" aria-required="true" aria-invalid="false" aria-describedby="sectionS-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="section" data-valmsg-replace="true"></span>
                                            
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="email" class="control-label mb-1">Email</label>
                                                <input id="email" name="update_email" type="email" class="form-control email valid" data-val="true" data-val-required="Enter Student's Email "
                                                value="<?php echo $eml;?>"  
                                                autocomplete="email" aria-required="true" aria-invalid="false" aria-describedby="email-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true"></span>
                                            
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="password" class="control-label mb-1">Password</label>
                                                <input id="update_password" name="update_password" type="password" class="form-control password valid" data-val="true" data-val-required="Enter Student's Password "
                                                value="<?php echo $pas;?>"  
                                                autocomplete="password" aria-required="true" aria-invalid="false" aria-describedby="password-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true"></span>
                                               
                                                <input type="checkbox" onclick="StudentUpdateShowPassword()">Show Password
                                                <script>
                                                    function StudentUpdateShowPassword() {
                                                        var x = document.getElementById("update_password");
                                                        if (x.type === "password") {
                                                        x.type = "text";
                                                        } else {
                                                        x.type = "password";
                                                        }
                                                    }
                                                </script>
                                            </div>

                                            <div class="form-group has-success">
                                                <label for="phn_n" class="control-label mb-1">Phone number</label>
                                                <input id="phn_n" name="update_phn_n" type="text" class="form-control phn_n valid" data-val="true" data-val-required="Enter Student's Phone number "
                                                value="<?php echo $phone;?>"      
                                                autocomplete="phn_n" aria-required="true" aria-invalid="false" aria-describedby="phn_n-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="phn_n" data-valmsg-replace="true"></span>
                                            
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="addrss" class="control-label mb-1">Address</label>
                                                <input id="addrss" name="update_addrss" type="text" class="form-control addrss valid" data-val="true" data-val-required="Enter Student's Address "
                                                value="<?php echo $ads;?>"  
                                                autocomplete="addrss" aria-required="true" aria-invalid="false" aria-describedby="addrss-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="addrss" data-valmsg-replace="true"></span>
                                            
                                            </div>

                                         

                                            <div class="form-group has-success">
                                                <label for="gender" class="control-label mb-1">Gender</label>
                                                <input id="gender" name="update_gender" type="text" class="form-control gender valid" data-val="true" data-val-required="Enter Student's Age "
                                                value="<?php echo $gen;?>"  
                                                autocomplete="gender" aria-required="true" aria-invalid="false" aria-describedby="gender-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="gender" data-valmsg-replace="true"></span>
                                            
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="date_b" class="control-label mb-1">Date of Birth</label>
                                                <input id="date_b" name="update_date_b" type="date" class="form-control gender valid" data-val="true" data-val-required="Enter Student's Age "
                                                value="<?php echo $dOb;?>"    
                                                autocomplete="date_b" aria-required="true" aria-invalid="false" aria-describedby="date_b-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="date_b" data-valmsg-replace="true"></span>
                                            
                                            </div>



                                                <div>
                                                 <input id="submit_button" type="submit" name= "update_student" class="btn btn-lg btn-info btn-block" value="Update">
                                                    &nbsp;
                                                    <span id="sub-button-add">Update data</span>
                                                 
                                                </div>
                                               
                                        </form>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

<footer> 
                        <div class="row justify-content-md-center">
                            <div class="col-md-10">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
</footer>
</html>
<!-- end document-->
