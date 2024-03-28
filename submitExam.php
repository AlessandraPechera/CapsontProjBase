<?php
include("conn.php");

session_start();

if (!isset($_SESSION['student_id'])) {
    header("Location: home.php");
    exit();
}



 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question_ids = $_POST['question_id'];
    
    $answers = $_POST['answer'];

    $score = 0;
    
    foreach ($question_ids as $question_id) {
        if (array_key_exists($question_id, $answers)) {

            $selected_option = $answers[$question_id];
            $getQuestion =  "SELECT * FROM `questions` WHERE id = $question_id";
            $qname = $conn->query($getQuestion);

            $sql = "SELECT * FROM `questions` WHERE id = $question_id";
            $result = $conn->query($sql);
          
            if ($result->num_rows > 0) {

                $rowData = $qname->fetch_assoc();
                $row = $result->fetch_assoc();
              
                $questionName = $rowData['question'];
                $correct_option = $row['correct_option'];
                

                // Debug: Output question Name, correct option, and selected option for each question
                echo "<br>  Question: $questionName<br><br>Correct Option: $correct_option <br> Selected Option: $selected_option <br>";
                
                if (substr($selected_option, 1, -1) == $correct_option) {
                $score++;
                }
            }
        }
    }

      // Output final score
    echo "<br> Final Score: $score";

    $sql = "SELECT * FROM `questions` WHERE id = $question_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
   
    $category = $row['category'];
    $stId = $_SESSION['student_id'];
    $stFn = $_SESSION['student_name'];
    $stLn = $_SESSION['student_lname'];

    $t=time();
    
    $timeNow = (date("Y-m-d",$t));

    $insertD =  mysqli_query($conn,"INSERT INTO student_scores VALUES
    ('$stId','$stFn', '$stLn', '$score','$category', '$timeNow')");
    
 }

?>
