<?php 
    include('config/dbconnect.php');

    if(isset($_POST['masterlist_delete']))
    {
        $formlist_ID = $_POST['masterlist_delete'];
        $formlist_query = "DELETE FROM $dbmasterlist WHERE id ='$formlist_ID'";

        $formlist_run = mysqli_query($conn, $formlist_query);

        if($formlist_run)
        
        {
            header('location: layout-static.php');
            exit(0);
        }
    }

    if(isset($_POST['m-update-register']))
    {   
        $user_id = $_POST['id'];
        $alias = $_POST['alias'];
        $tbirth =$_POST['tbirth'];
        $batchname =$_POST['batchname'];
        $initiatingGT =$_POST['initiatingGT'];
        $welcomeDate =$_POST['welcomeDate'];
        $welcomeGTGLT =$_POST['welcomeGTGLT'];
        $fName =$_POST['fName'];
        $lName =$_POST['lName'];

        $update_query =" UPDATE $dbmasterlist SET alias ='$alias', tbirth='$tbirth' , batchname ='$batchname' , 
        initiatingGT='$initiatingGT' , welcomeDate='$welcomeDate' , welcomeGTGLT='$welcomeGTGLT' , fName='$fName', lName='$lName' WHERE id ='$user_id' ";

        $update_query_run = mysqli_query($conn, $update_query);

        if($update_query_run)
        {
            
            header('location: layout-static.php');
            exit(0);
        }
    }
?>