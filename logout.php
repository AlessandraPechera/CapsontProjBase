<?php

session_start();
session_unset();
session_destroy();

?>

<script>
    alert("Have a great day! Goodbye!");
    window.location.href="home.php";
</script>