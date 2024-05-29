<?php

$host = "localhost";
$user ="root";
$password=  "";
$databasename ="fatimadb";
$dbmasterlist ="fatimamasterlist";
$dbuser ="masterlist";

$conn = mysqli_connect("$host","$user","$password","$databasename",);

if(!$conn)
{
    header("Location: ../errors/dberror.php");
    die();
}
?>