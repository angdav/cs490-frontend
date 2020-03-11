<?php
session_start();
session_unset();
session_destroy();

echo $_SESSION['usr'];

echo "Logged out successfully. Redirecting...";

?>