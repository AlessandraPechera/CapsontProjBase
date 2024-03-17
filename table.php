<?php
   include ("conn.php");

   session_start();

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
    <title>Tables</title>

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
                       
                        <li class="active has-sub">
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
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
       
            

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--10">
                    <div class="container-fluid">
                   
                        <div class="row justify-content-center m-t-">
                            
                            <h1 class="m-b-35">Students</h1>
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <input type="text" id="mySearch" onkeyup="searchFunction()" placeholder="Search for names.." title="Type in a name">


                                <div class="table-responsive m-b-40">
                                    <table id="myTable" class="table  table-bordered  table-data2">
                                        <thead class="table-success">
                                            <tr>
                                            <th>Student ID</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th class="text-center">Section</th>
                                            <th class="text-center ">Email</th>
                                            <th>Phone number</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Age</th>
                                            <th class="text-center">Gender</th>
                                            <th>Date of Birth</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php
                                            $getdata = mysqli_query($conn, "SELECT * FROM student_info");
                                            while ($row = mysqli_fetch_array($getdata)) {
                                                # code...
                                            
                                            ?>
                                            <tr>
                                            <td> <?php echo $row['id'];?></td>
                                            <td> <?php echo $row['fname'];?></td>
                                            <td> <?php echo $row['lname'];?></td>
                                            <td> <?php echo $row['section'];?></td>
                                            <td> <?php echo $row['email'];?></td>
                                            <td> <?php echo $row['phn_n'];?></td>
                                            <td> <?php echo $row['addrss'];?></td>
                                            <td> <?php echo $row['age'];?></td>
                                            <td> <?php echo $row['gender'];?></td>
                                            <td> <?php echo $row['date_b'];?></td>
                                            <td> <a href="update.php?id=<?php echo $row['id'];?>"> Edit </a> </td>
                                            <td> <a href="delete.php?id=<?php echo $row['id'];?>"> Delete </a> </td>
                                            </tr>

                                                <?php
                                                }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                   
                                </div>
                                <!-- END DATA TABLE-->
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
