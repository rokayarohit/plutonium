<?php
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
if($user=="admin" && $pass=="admin"){
    $_SESSION['user_pass'] = $pass;
echo "You are Welcome Mr Plutonium";
echo "<script>window.location.href='session.php';</script>";
}else{
echo " Try Again";
return 0;
}

?>
