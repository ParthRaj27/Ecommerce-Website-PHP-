<?php
session_start();
session_destroy();
header("Location: /WD/login.php");
exit();
?>
