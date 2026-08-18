<?php

// Session are always unique according to server
// Session are always makes cookies

session_start(); // Compulsory

?>

<html>

<body>
    <?php
    echo "Useris:" . $_SESSION["username"];
    ?>
</body>

</html>