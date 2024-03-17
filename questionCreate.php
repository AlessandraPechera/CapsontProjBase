<?php


 include ("conn.php");

 session_start();   
 $ref_id =$_GET['id'];
 
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
    <title>Add or Edit Questions</title>

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
    <style>
   
    </style>

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
                            <a href="questionCreate.php">
                                <i class="fas fa-calendar-alt"></i>Add & Edit Questions</a>
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
                        <li>
                            <a href="createExam.php">
                                <i class="fas fa-calendar-alt"></i>Add & Edit Exam</a>
                        </li>
                        <li class="active has-sub">
                            <a href="questionCreate.php">
                                <i class="fas fa-calendar-alt"></i>Add & Edit Questions</a>
                        </li>
                        
                       
                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                           
                            <div class="header-button">
                                <div class="noti-wrap">
                              
                                </div>
                                <div class="account-wrap ">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">Admin@mail.com</span>
                                                </div>
                                            </div>
                                         
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                          
                          
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header"></div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Add Question</h3>

                                        </div>
                                        <hr>
                                    <form name="form1" action="addQuestionProcess.php
                                    " method="post" novalidate="novalidate">

                                     
                                        

                                        <div class="form-group row">
                                            <label for="question" class="col-sm-2 col-form-label">Question</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="inputQuestion" id="inputQuestion" placeholder="Question">
                                            </div>
                                        </div>     
                                        
                                        <div class="form-group row">
                                            <label for="question" class="col-sm-2 col-form-label">Add Option 1</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="inputOption1" id="inputOption 1" placeholder="Option 1">
                                            </div>
                                        </div>     
                                        
                                        
                                        <div class="form-group row">
                                            <label for="opt1" class="col-sm-2 col-form-label">Add Option 2</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="inputOption2" id="inputOption2" placeholder="Option 2">
                                            </div>
                                        </div>           

                                        <div class="form-group row">
                                            <label for="opt2" class="col-sm-2 col-form-label">Add Option 3</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="inputOption3" id="inputOption3" placeholder="Option 3">
                                            </div>
                                        </div>           
                                        
                                        <div class="form-group row">
                                            <label for="opt3" class="col-sm-2 col-form-label">Add Option 4</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="inputOption4" id="inputOption3" placeholder="Option 4">
                                            </div>
                                        </div>               
                                        
                                        <div class="form-group row">
                                            <label for="qAnswer" class="col-sm-2 col-form-label">Add Answer</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="inputAnswer" id="inputAnswer" placeholder="Answer">
                                            </div>
                                        </div>      

                                        <div class="form-group row">
                                            <label for="eCategory" class="col-sm-2 col-form-label"> Category</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="inputCategory" id="inputCategory" placeholder="Category">
                                            </div>
                                        </div>          
                                        
                                            <div>
                                            <input id="submit_button" type="submit" name= "submitl" class="btn btn-lg btn-info btn-block" value="ADD">
                                             &nbsp;
                                                    
                                                 
                                             </div>


                                        
                                    </form>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                            <div class="table-responsive m-b-40">
                                    <table id="myTable" class="table  table-bordered  table-data2">
                                        <thead class="table-success">
                                            <tr>
                                            <th>Category</th>
                                            <th>Question</th>
                                            <th>Option 1</th>
                                            <th class="text-center">Option 2</th>
                                            <th class="text-center ">Option 3</th>
                                            <th>Option 4</th>
                                            <th class="text-center">Answer</th>
                                            
                                        
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php
                                            

                                           
                                            $getdata = mysqli_query($conn, "SELECT * FROM questions WHERE id");
                                            while ($row = mysqli_fetch_array($getdata)) {
                                                # code...
                                            
                                            ?>
                                            <tr>
                                            <td> <?php echo $row['category'];?></td>
                                            <td> <?php echo $row['question'];?></td>
                                            <td> <?php echo $row['q_op1'];?></td>
                                            <td> <?php echo $row['q_op2'];?></td>
                                            <td> <?php echo $row['q_op3'];?></td>
                                            <td> <?php echo $row['q_op4'];?></td>
                                            <td> <?php echo $row['answer'];?></td>
                                           
                                       
                                            <td> <a href="editquestion.php?id=<?php echo $row['id'];?>"> Edit </a> </td>
                                            <td> <a href="questionDelete.php?id=<?php echo $row['id'];?>"> Delete </a> </td>
                                            </tr>

                                                <?php
                                                }
                                                ?>
                                          
                                                </tr>  
                                        </tbody>
                                    </table>
                                   
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
                                            
