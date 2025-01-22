<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to sign-in page
echo '<script>
      alert("You Logged out succesfully");
      window.location.href = "index.php";
      </script>';
exit();
?>