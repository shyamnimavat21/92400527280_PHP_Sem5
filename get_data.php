<?php

// Debugging data
 echo "<pre>";
 // print_r($_GET);
 print_r($_POST);
 echo "</pre>";

// $user_name = $_get['u_name'];
// $user_surname = $_get['u_pass'];

// echo "$user_name $user_surname"

$target_path = "uploads/"; //Location for uploadind files
$target_path = $target_path . basename ($_FILES['fileToUpload']['name']);
// uploads/filename.jpg
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
echo "File uploaded successfully!";
} else{
echo "Sorry, file not uploaded, please try again!";
}
?>