<?php
include "conn.php";
    
  

$getdata= mysqli_query($conn, "SELECT * FROM examcategory WHERE id");
while($row = mysqli_fetch_array($getdata)) {   
$exam_category = $row['e_Name'];
}       
?>
<?php
if(isset($_POST['submitl'])){

    $inp_Q = $_POST['inputQuestion'];
    $inp_Op1 = $_POST['inputOption1'];
    $inp_Op2 = $_POST['inputOption2'];
    $inp_Op3 = $_POST['inputOption3'];
    $inp_Op4 = $_POST['inputOption4'];
    $inp_Ans = $_POST['inputAnswer'];
    $cate = $_POST['inputCategory'];
    
    

    $insert = mysqli_query($conn,"INSERT INTO questions VALUES
    ('0','$inp_Q','$inp_Op1', '$inp_Op2', '$inp_Op3','$inp_Op4', '$inp_Ans','$cate')");

    
    if($insert == true){
        
        ?>
        <script>
        alert("Question Added");
        window.location.href ="questionCreate.php";
        </script>
        <?php   
    }else{
        ?>
        <script>
        alert("Question creation error! \n Please try again");
        window.location.href="questionCreate.php";
        </script>
        <?php
    }

}
?>