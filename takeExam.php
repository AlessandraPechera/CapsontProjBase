<?php
include ("conn.php");

session_start();

if(!isset($_SESSION['student_id'])){
    header("Location: home.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
   

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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
             <a class="logo" href="studentDash.php">
                <h1>Student</h1>
              </a>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="studentDash.php?id=<?php echo $_SESSION['student_id'];?>">
                               
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                              
                            </ul>
                        </li>
                       
                     
                        <li class="active has-sub">
                            <a href="takeExam.php?id=<?php echo $_SESSION['student_id'];?>">
                                <i class="far fa-check-square"></i>Exams </a>
                        </li>
                   
                       
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-calendar-alt"></i>Log out</a>
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
                        <a class="logo" href="studentDash.php">
                          <h1>Student</h1>
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
                     
                            <a class="js-arrow" href="studentDash.php">
                                <i class="fas fa-tachomter-alt"></i>Dashboard </a>
                        
                                <li>
                            
                        <li>
                            <a href="takeExam.php">
                                <i class="far fa-check-square"></i>Exams</a>
                        </li>
                        
                       
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-calendar-alt"></i>Log out</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
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
                    <div class="card-header">Exam Form</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2"> Exam</h3>
                        </div>
                        <hr>
                         
                <?php

                $count = 1;
                $getdata = mysqli_query($conn, "SELECT * FROM questions WHERE category='JAVA' ORDER BY RAND();");
              $row = mysqli_fetch_array($getdata);
            
                    

                        
                                        
                ?>
                
                
                <form action="examsendProcess.php" method ="post" class="was-validated">
                    
                    <input type="hidden" name="sId" value="<?php echo  $_SESSION['student_id']; ?>">

                    <input type="hidden" name="fname" value="<?php echo  $_SESSION['student_name']; ?>">

                    
           

                    <input type="hidden" name="sSection" value="<?php echo  $_SESSION['student_id']; ?>">

                    <?php echo $count++;?>. <label for="question"><?php echo $row['question'];?></label>
                    <input type="hidden" name="questionn" value="<?php echo $row['question'];?>" ><br>

                    <input type="radio" id="qop1" name="qop" value="<?php echo $row['q_op1']?>">

                    <input type="hidden" name="qop1" value="<?php echo $row['q_op1'];?>" >
                    <label for="qop1"><?php echo $row['q_op1']?></label><br>
                    
                
                    <input type="radio" id="qop2" name="qop" value="<?php echo $row['q_op2']?>">
                    <input type="hidden" name="qop2" value="<?php echo $row['q_op2'];?>" >
                    <label for="qop2"><?php echo $row['q_op2']?></label><br>
                    
                    <input type="radio" id="qop3" name="qop" value="<?php echo $row['q_op3']?>">
                    <input type="hidden" name="qop3" value="<?php echo $row['q_op3'];?>" >
                    <label for="qop3"><?php echo $row['q_op3']?></label><br>
                    
                    
                    
                    <input type="radio" id="qop4" name="qop" value="<?php echo $row['q_op4']?>">
                    <input type="hidden" name="qop4" value="<?php echo $row['q_op4'];?>" >
                    <label for="qop4"><?php echo $row['q_op4']?></label><br>

                    <input type="hidden" name="canser" value="<?php echo $row['answer'];?>" >
                

                
                    
                    
                
                    <?php
                    
                    ?>
                    
                   
                        <div>
                        <input id="submit_button" type="submit" name= "submitExamSent" class="btn btn-lg btn-info btn-block" value="submit">
                                &nbsp;
                                    <span id="sub-button-add">Submit</span>
                                                    
                        </div>
                </form>
                    </div>
                </div>
            </div>
            

    </div>
</div>
</div>
<div class="row row justify-content-md-center">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
            </div>
</div>
      
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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


</html>
<!-- end document-->
