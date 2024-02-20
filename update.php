<?php
 
    include "conn.php";
    $ref_id = $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM 
    student_info WHERE id='$ref_id'");

    while ($d=mysqli_fetch_object($getdata)){
        $id = $d -> id;
        $fn = $d -> fname;
        $ln = $d -> lname;
        $sect = $d -> section;
        $eml = $d -> email;
        $pnn = $d -> phn_n;
        $ads = $d -> addrss;
        $ae = $d -> age;
        $gend = $d -> gender;
        $doob = $d -> date_b;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Update Profile</title>
</head>
<body>
<div class="nav">
    
    <a href="form.php"> Add Students </a> &nbsp; | &nbsp;
    <a href="table.php"> View Records </a> 

</div>
<h1> Update Profile</h1>

<form action= "process.php?id=<?php echo $ref_id;?>" method ="POST">
        <label> Student Id</label><br>
        <input type ="text" name= "update_id" value ="<?php echo $id;?>"   required> </p> 
        
        <label> First name </label> </br>
        <input type ="text" name= "update_fname" value="<?php echo $fn;?>"  required> </p>
        
        <label> Last name </label> </br>
        <input type ="text" name= "update_lname" value="<?php echo $ln;?>" required> </p>


        <label> Section  </label> </br>
        <input type ="text" name= "update_section"  value="<?php echo $sect;?>" required> </p>

        <label> Email </label> </br>
        <input type ="email" name= "update_email" value="<?php echo $eml; ?>"  required> </p>

        <label> Phone number </label> </br>
        <input type ="text" name= "update_phn_n" value="<?php echo $pnn; ?>"  required> </p>
        
        <label> Address </label> </br>
        <input type ="text" name= "update_addrss" value="<?php echo $ads; ?>" required> </p>

        <label> Age </label> </br>
        <input type ="number" name= "update_age" value="<?php echo $ae; ?>" required> </p>
        
        <label> Gender </label> </br>
        <input type ="text" name= "update_gender" value="<?php echo $gend; ?>" required> </p>

        <label> Date of Birth </label> </br>
        <input type ="date" name= "update_date_b" value="<?php echo $doob; ?>" required> </p>

        <input type ="submit" name= "update_student" value="UPDATE PROFILE">

    </form>
    
</body>
</html>