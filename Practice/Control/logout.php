<?php
session_start();
unset( $_SESSION["fname"]);
unset( $_SESSION["pass"]);
unset( $_SESSION["mail"]);
unset($_SESSION["d"]);
header("Location: ../VW/Task.php");
?> 