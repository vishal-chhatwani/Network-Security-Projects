<?php
session_start();
session_unset();
session_destroy();
echo "<center>";
echo "<h1>You have Logged out successfully....</h1><br/>";
echo "<h2>Please click <a href='index.php'>here</a> to login.</h2>";
echo "</center>";
//header('Location: /index.php');
?>