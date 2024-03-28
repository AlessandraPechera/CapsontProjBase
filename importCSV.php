<?php
// Database connection
include("conn.php");

// Check if form is submitted
if(isset($_POST["submit"])) {
    // Check if file is uploaded without errors
    if(isset($_FILES["csvFile"]) && $_FILES["csvFile"]["error"] == 0) {
        $fileName = $_FILES["csvFile"]["name"];
        $fileTmp = $_FILES["csvFile"]["tmp_name"];

        // Check file extension
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if($fileExt == "csv") {
            // Read CSV file
            if(($handle = fopen($fileTmp, "r")) !== FALSE) {
                // Loop through each row in CSV
                while(($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    // Assuming CSV columns are in order: answer , question, option1, option2, option3, option4, category
                   
                    $question = $data[0];
                    $option1 = $data[1];
                    $option2 = $data[2];
                    $option3 = $data[3];
                    $option4 = $data[4];
                    $answer = $data[5];
                    $category = $data[6];

                    // Insert data into database
                    $sql = "INSERT INTO questions (question, q_op1, q_op2, q_op3, q_op4, correct_option, category) 
                            VALUES ('$question', '$option1', '$option2', '$option3', '$option4','$answer','$category' )";
                    mysqli_query($conn, $sql);
                }
                fclose($handle);
                header("location: questionCreate.php");
            } else {
                echo "Error reading CSV file.";
            }
        } else {
            echo "Please upload a CSV file.";
        }
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Form submission error.";
}
?>
