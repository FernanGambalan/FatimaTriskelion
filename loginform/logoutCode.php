<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_destroy();
    header('Location:../index.php');
    exit(0);
}


?>