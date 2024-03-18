
<?php
 

    include "conn.php";
 
    session_start();
    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM 
    examcategory WHERE id='$ref_id'");

    while ($d=mysqli_fetch_object($getdata)){
        $e = $d -> e_Name;
        
       
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
    <title>Create & Edit Exam</title>

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
                     
                     <a class="js-arrow" href="dashboard.php">
                         <i class="fas fa-tachomter-alt"></i>Dashboard </a>
                 
                         <li>
                     <a href="table.php">
                         <i class="fas fa-table"></i>Student list</a>
                 </li>
                 <li>
                     <a href="form.php">
                         <i class="far fa-check-square"></i>Student Forms</a>
                 </li>
                 <li>
                     <a href="createExam.php">
                         <i class="fas fa-calendar-alt"></i>Add & Edit Exam</a>
                 </li>
                
                 <li>
                            <a href="createQuestions.php">
                                <i class="fas fa-calendar-alt"></i>Add & Edit Questions</a>
                 </li>
                 <li>
                            <a href="logout.php">
                                <i class="fas fa-calendar-alt"></i>Log out</a>
                        
                 </li>
                        
                        
                
              
               
             </ul>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
             <a class="logo" href="dashboard.php">
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
                        <li class="active has-sub">
                            <a href="createExam.php">
                                <i class="fas fa-calendar-alt"></i>Add & Edit Exam</a>
                        </li>
                        <li>
                            <a href="createQuestions.php">
                                <i class="fas fa-calendar-alt"></i>Add & Edit Questions</a>
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

        <!-- PAGE CONTAINER-->
        <div class="page-container">
           

                <!-- MAIN CONTENT-->
                <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Create  Exam</h3>
                                        </div>
                                        <hr>
                                        <form action="examCreateProc.php?id=<?php echo $ref_id;?>" method="post" novalidate="novalidate">
                                             
                                             <div class="form-group has-success">
                                                 <label for="exam_name" class="control-label mb-1">Exam Category</label>
                                                 <input id="exam_nameEdit" name="exam_nameEdit" type="text" class="form-control exam_name valid" data-val="true" data-val-required="Enter Exam Name"
                                                 value = "<?php echo $e;?>"
                                                 autocomplete="exam_name" aria-required="true" aria-invalid="false" aria-describedby="exam_nameEdit-error">
                                                 <span class="help-block field-validation-valid" data-valmsg-for="exam_name" data-valmsg-replace="true"></span>
                                             
                                             </div>
                                                    
                                                <div>
                                                 <input id="submit_button" type="submit" name= "edit_Exam" class="btn btn-lg btn-info btn-block" value="Save">
                                                    &nbsp;
                                                    
                                                 
                                                </div>
                                        </form>        
                                    </div>
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

