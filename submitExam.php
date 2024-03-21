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
            $sql = "SELECT correct_option FROM `questions` WHERE id = $question_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $correct_option = $row['correct_option'];

                // Debug: Output question ID, correct option, and selected option for each question
                echo "Question ID: $question_id, Correct Option: $correct_option, Selected Option: $selected_option<br>";

                if ($selected_option == $correct_option) {
                    $score++;
                }
            }
        }
    }

    // Output final score
    echo "Final Score: $score";
}
?>
