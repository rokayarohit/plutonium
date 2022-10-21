// HTML Under Construction 😁
<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
if($user==admin && $pass==admin){
echo "You're Welcome Mr. Plutonium";
echo "<script>window.location.href='index.php';</script>";
?>
