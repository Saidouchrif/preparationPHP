<?php
session_start();
$user2="Said23";
$pass2="1234";
if(isset($_SESSION['user'])&&isset($_SESSION["pass"])){
    if($_SESSION['user']===$user2&&$_SESSION["pass"]===$pass2){
    $user = $_SESSION['user'];
    echo "<h1>Welome : $user<h1/>";
    echo '<form method="POST" action="index22.php">
    <input type="submit" name="logout" value="Logout"/>
    <form/>';
}
}else{
    header("location:index22.php");
    session_unset();
}
?>