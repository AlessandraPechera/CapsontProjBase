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
    <title>Add Questions</title>

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
                       
                        <li class="active has-sub">
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
                        <div class="row justify-content-center">    
                            
                                    
                          
                            <div class="col-lg-10">
                                <div class="card">

                                 <div class="card-header"></div>
                                    
                                    <div class="card-body">
                                        <div class="card-title">
                                          
                                          
                                             <h3 class="text-center title-2">Create Question</h3>
                                        

                                        </div>
                                        <hr>
                                    <form name="form1" action="addQuestionProcess.php" method="post" novalidate="novalidate">
                                       
                                    <div class="form-group row">
                                      <label for="Category" class="col-sm-2 col-form-label">Categroy</label>
                                        <div class="col-sm-10">
                                        <select name="inputCategory" class="form-control">
                                        <?php
                                            $getdata = mysqli_query($conn, "SELECT * FROM examcatgory");
                                            while ($row = mysqli_fetch_array($getdata)) {
                                                # code...
                                            
                                            ?>  
                                        <option name="<?php echo $row['examName'];?>"><?php echo $row['examName'];?> </option>
                                        <?php
                                        }
                                        ?>
                                      
                                         </select>
                                            </div>
                                        </div>   



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

                                             
                                        
                                            <div>
                                            <input id="submit_button" type="submit" name= "submitl" class="btn btn-lg btn-info btn-block" value="ADD">
                                             &nbsp;
                                                    
                                                 
                                             </div>


                                        
                                    </form>
                                    
                                     
                                    </div>

                                    
                                </div>


                                <div class="form-group row">
                                <label for="csvFile" class="col-sm-2 col-form-label">Upload CSV File</label>
                                    <div class="col-sm-10">
                                        <p>Instruction<br>
                                        CSV file format must be: Question, Option1, Option2, Option3, Option4, Answer, Category</p><br>
                                        <form name="form1" action="importCSV.php" method="post" enctype="multipart/form-data">

                                          <input type="file" class="form-control-file" id="csvFile" name="csvFile">
                                          <input id="submit_button" type="submit" name= "submit" class="btn btn-lg btn-info btn-block" value="Upload">
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                          
                       


                    </div>
                    
                </div>
               

            </div>
            <div class="row justify-content-md-center">



                            <div class="col-md-10">
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
                                            
