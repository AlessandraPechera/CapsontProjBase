<?php
   include ("conn.php");

   session_start();
   if(!isset($_SESSION['admin_id'])){
    header("Location: home.php");
    exit();
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
                       
                        <li class="active has-sub">
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Exams</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="exam1.php">JAVA</a>
                                </li>
                                <li>
                                    <a href="exam2.php">C++</a>
                                </li>
                                <li>
                                    <a href="exam3.php">Python</a>
                                </li>
                                <li>
                                    <a href="exam4.php">HTML</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-user-circle"></i>Log out</a>
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
                        
                        <li >   
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
                                <i class="fas fa-calendar-alt"></i>Add  Questions</a>
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Exams</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="exam1.php">JAVA</a>
                                </li>
                                <li>
                                    <a href="exam2.php">C++</a>
                                </li>
                                <li>
                                    <a href="exam3.php">Python</a>
                                </li>
                                <li>
                                    <a href="exam4.php">HTML</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fas fa-user-circle"></i>Log out</a>
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
                   
                        <div class="row justify-content-center m-t-0">
                            
                            <h1 class="m-b-5">Students</h1>
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                               

                                <form method="post" action="">
                                    <input type="text" name="search" placeholder="Search...">
                                    <input type="submit" name="submit" value="Search">
                                </form>
                                
                                <div class="table-responsive m-b-10">
                                <table id="myTable" class="table table-bordered table-data2">
                                    <thead class="table-success">
                                        <tr>
                                            <th>Student ID</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th class="text-center">Section</th>
                                            <th class="text-center">Email</th>
                                            <th>Phone number</th>
                                            <th class="text-center">Address</th>
                                     
                                            <th class="text-center">Gender</th>
                                            <th>Date of Birth</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        //search
                                        if(isset($_POST['submit'])){
                                            $search = $_POST['search'];
                                            $sql = "SELECT * FROM student_info WHERE id LIKE '%$search%' OR fname LIKE '%$search%' OR lname LIKE '%$search%' OR email LIKE '%$search%'";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    echo "<tr>
                                                            <td>" . $row["id"] . "</td>
                                                            <td>" . $row["fname"] . "</td>
                                                            <td>" . $row["lname"] . "</td>
                                                            <td class='text-center'>" . $row["section"] . "</td>
                                                            <td class='text-center'>" . $row["email"] . "</td>
                                                            <td>" . $row["phn_n"] . "</td>
                                                            <td class='text-center'>" . $row["addrss"] . "</td>
                                                            
                                                            <td class='text-center'>" . $row["gender"] . "</td>
                                                            <td>" . $row["date_b"] . "</td>
                                                            <td class='text-center'><a href='update.php?id=" . $row["id"] . "'>Edit</a></td>
                                                            <td class='text-center'><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>
                                                        </tr>";
                                                }
                                            } else {
                                                echo "<tr><td colspan='12'>No results found</td></tr>";
                                            }
                                        } else {
                                            // default display
                                            $getdata = mysqli_query($conn, "SELECT * FROM student_info");
                                            while ($row = mysqli_fetch_array($getdata)) {
                                                echo "<tr>
                                                        <td>" . $row["id"] . "</td>
                                                        <td>" . $row["fname"] . "</td>
                                                        <td>" . $row["lname"] . "</td>
                                                        <td class='text-center'>" . $row["section"] . "</td>
                                                        <td class='text-center'>" . $row["email"] . "</td>
                                                        <td>" . $row["phn_n"] . "</td>
                                                        <td class='text-center'>" . $row["addrss"] . "</td>

                                                        <td class='text-center'>" . $row["gender"] . "</td>
                                                        <td>" . $row["date_b"] . "</td>
                                                        <td class='text-center'><a href='update.php?id=" . $row["id"] . "'>Edit</a></td>
                                                        <td class='text-center'><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>
                                                    </tr>";
                                            }
                                        }
                                        ?>
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
