<?php

// Session are always unique according to server
// Session are always makes cookies

session_start(); // Compulsory

?>

<html>

<body>
    <?php
    $_SESSION["username"] = "SHYAM";
    echo "Session information to stored";
    ?>
</body>

</html>