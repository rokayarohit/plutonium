<?php
    session_start();
    if(!isset($_SESSION['user_pass'])){
   
        echo "<script>window.location.href='test.php';</script>";
        exit;
    }
?>
// Your Content here
