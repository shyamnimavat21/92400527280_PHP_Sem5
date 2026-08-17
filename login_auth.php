<?php

// Debugging data

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$user = $_POST["user"];
$pass = $_POST["pass"];

if($user == "Admin" && $pass == "Nimavat"){
    // echo "Welcome Admin";
    header("location:dashboard.php");
}else{
    echo "Wrong Username or Password";
}

?>