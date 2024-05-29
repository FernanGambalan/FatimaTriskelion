<?php 
session_start();
include ('../admin/config/dbconnect.php');
if(!isset($_SESSION['auth']))
{   
    $_SESSION['message'] = "You Need To Login First";
    header("Location: ../loginform/register.php");
    exit(0);
}
else
{ 
    if($_SESSION['role_as'] != '1')
    {
        $_SESSION['message'] ="Your are not Authorized In this Page";
        header("Location: ../index.php");
        exit(0);
    }
}


?>
