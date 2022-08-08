<?php
session_start();
if(session_destroy())
{
    header("Location:../aud_vw/logpage.php");
}