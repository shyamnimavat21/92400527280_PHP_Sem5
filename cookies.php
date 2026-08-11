<?php

// Function encrypt_cookie($user_value)
// {
//      $user_value = $user . "434873847";
//      $data = setcookie("user", "$user_value", time() + 300);
//      return $data;
// }

// Cookie is a persistant storage but with a expiry timeline
// For performance tracing of website
//
//

// Creating Cookies
// setcookie("user", "Shyam", "time"() + 300);

// Deleting Cookie
setcookie("user", "Developer", "time"() - 300);

// Reading Cookies
echo $_COOKIE["user"];  

?>