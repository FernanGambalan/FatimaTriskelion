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

    if(isset($_POST['m-update-tenetscodes']))
    {   
        $user_id = $_POST['id'];
        $t_tenets = $_POST['tenetsTitle'];
        $tbirth =$_POST['headingDescription'];
        $tOne = $_POST['tOne'];
        $tTwo = $_POST['tTwo'];
        $tThree = $_POST['tThree'];
        $tFour = $_POST['tFour'];
        $tFive = $_POST['tFive'];
        $tSix = $_POST['tSix'];
        $tSeven = $_POST['tSeven'];
        $tEight = $_POST['tEight'];
        $capT = $_POST['capT'];
        $capR = $_POST['capR'];
        $capI = $_POST['capI'];
        $capS = $_POST['capS'];
        $capK = $_POST['capK'];
        $capE = $_POST['capE'];
        $capL = $_POST['capL'];
        $capIi = $_POST['capIi'];
        $capO = $_POST['capO'];
        $capN = $_POST['capN'];
       

        $update_query =" UPDATE tenetsandcodes SET tenetsTitle = '$t_tenets', headingDescription = '$tbirth',
                        tOne ='$tOne',tTwo ='$tTwo',tThree ='$tThree',tFour ='$tFour',tFive ='$tFive',tSix ='$tSix',tSeven ='$tSeven',tEight ='$tEight',
                        capT ='$capT',capR ='$capR',capI ='$capI',capS ='$capS',capK ='$capK',capE ='$capE',capL ='$capL',capIi ='$capIi',capO ='$capO',capN ='$capN'
                        WHERE id ='$user_id' ";

        $update_query_run = mysqli_query($conn, $update_query);

        if($update_query_run)
        {
            header('location: tenetscodes.php');
            exit(0);
        }
    }
?>