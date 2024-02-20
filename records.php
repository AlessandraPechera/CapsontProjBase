<?php
   include ("conn.php");

   session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
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
          <li class="active bg-success"><a href="studentlist.html">Student list</a></li>
          <li><a href="regstud.html">Register Students</a></li>
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
          <li class="active bg-success"><a href="studentlist.html">Student List</a></li>
          <li><a href="regstud.html">Register Students </a></li>
          <li><a href="createExam.html">Create Exams</a></li>
        </ul><br>
      </div>
      <br>
      
      <div class="col-sm-9">
        <div class="well">
          <h1>List of Students </h1>

   

<table border ="3.5px solid"> 
    <tr>
      <th> Id </th>
      <th>First name</th>
      <th>Last name</th>
      <th>Section</th>
      <th>Email</th>
      <th>Phone number</th>
      <th>Address</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Date of Birth</th>
      <th>Action 1</th>
      <th>Action 2</th>

    </tr>
   

    
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
    <td> <a href="update.php?id=<?php echo $row['id'];?>"> Update </a> </td>
    <td> <a href="delete.php?id=<?php echo $row['id'];?>"> Delete </a> </td>
    </tr>

        <?php
        }
        ?>

   
</table>

        </div>
      </div>
    </div>   
    </div>  
  </div>
</body>
</html>