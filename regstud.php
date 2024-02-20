<?php
   include ("conn.php");

   session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Students</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
  
   
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 550px}
        
        /* Set gray background color and 100% height */
        .sidenav {
          background-color: #f1f1f1;
          height: 100%;
        }
            
        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
          .row.content {height: auto;} 
        }
        
      </style>
</head>
<body>
    
<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="dashoboard.html">Dashboard</a></li>
          <li><a href="studentlist.php">Student list</a></li>
          <li class="active bg-success"><a href="regstud.php">Register Students</a></li>
          <li><a href="createExam.html"> Create exam</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-3 sidenav hidden-xs">
        <h2>Fragile</h2>
        <ul class="nav nav-pills nav-stacked">
          <li><a href="dashoboard.html">Dashboard</a></li>
          <li><a href="studentlist.php">Student List</a></li>
          <li class="active bg-success"><a href="regstud.php">Register Students </a></li>
          <li><a href="createExam.html">Create Exams</a></li>
        </ul><br>
      </div>
      <br>
      
  <div class="col-sm-9">
        <div class="well">
          
    <h1>Register Students</h1>
    <form action= "process.php" method ="POST">
 
      <label> Student Id</label></br>
      <input type ="text" name= "stud_id"  placeholder="Enter First Name here..."  required> </p> 
        
      <label> Firstname </label> </br>
  
      <input type ="text" name= "fname"  placeholder="Enter First Name here..."  required> </p>
      
      <label> Last name </label> </br>
      <input type ="text" name= "lname" placeholder="Enter Last Name here..."  required> </p>
  
     
  
      <label> Section </label> </br>
      <input type ="text" name= "section"  placeholder="Enter Section here..." required> </p>
  
      <label> Email </label> </br>
      <input type ="email" name= "email" placeholder="Enter Email here..." required> </p>
  
      <label> Phone number </label> </br>
      <input type ="text" name= "phn_n"  placeholder="Enter Phone number here..." required> </p>
      
      <label> Address </label> </br>
      <input type ="text" name= "addrss"  placeholder="Enter Address here..." required> </p>
  
      <label> Age </label> </br>
      <input type ="number" name= "age" placeholder="Enter Age here..." required> </p>
      
      <label> Gender </label> </br>
      <input type ="text" name= "gender" placeholder="Enter Gender here..." required> </p>
  
      <label> Date of Birth </label> </br>
      <input type ="date" name= "date_b" placeholder="Enter Date of Birth here..." required> </p>
  
      <input type ="submit" name= "add_students" value="ADD">
  
  </form>

   
    
        </div>
  </div>
 
</div>     
</body>
</html>