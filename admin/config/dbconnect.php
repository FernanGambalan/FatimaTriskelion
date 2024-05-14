<?php

$host = "localhost";
$user ="root";
$password=  "";
$database ="fatimadb";

$conn = mysqli_connect("$host","$user","$password","$database",);

if(!$conn)
{
    header("Location: ../errors/dberror.php");
    die();
}
?>