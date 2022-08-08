<?php
session_start();
echo $_SESSION["loginName"];
echo $_SESSION["loginpass"];
?>
<a href = "Location: ../aud_ctrl/logout.php"></a>
