
<?php
   include ("conn.php");

   session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sign Up</title>

    <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      background-color: aliceblue;      
    }
    h1{
        position:absolute;
        left:42%;
    }
    form{

      margin-top:75px;
      position:absolute;
      left:37.5%;
    }   
    input{
        width:40LLL0px;
        height:30px;
        border-radius:10px 10px;  
    }
    @media only screen and (max-width: 600px) {
        h1{
        position:absolute;
        left:22%;
    }
    form{

      margin-top:75px;
      position:absolute;
      left:10.5%;
    }   
}

  </style>
</head>

<body>
<h1>Register Students</h1>
    <form action= "process.php" method ="POST">
 
      <label> Student Id</label></br>
      <input type ="text" name= "stud_id"  placeholder="Enter First Name here..."  required> </p> 
        
      <label> First Name </label> </br>
  
      <input type ="text" name= "fname"  placeholder="Enter First Name here..."  required> </p>
      
      <label> Last name </label> </br>
      <input type ="text" name= "lname" placeholder="Enter Last Name here..."  required> </p>
  
     
  
      <label> Section </label> </br>
      <input type ="text" name= "section"  placeholder="Enter Section here..." required> </p>
  
      <label> Email </label> </br>
      <input type ="email" name= "email" placeholder="Enter Email here..." required> </p>
  
      <label> Phone Number </label> </br>
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
</body>
</html>