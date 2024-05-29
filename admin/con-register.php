<?php 
    session_start();
    include ('../admin/config/dbconnect.php');

    if(isset($_POST['m-register']))
    {   
        
        $alias = mysqli_real_escape_string($conn,$_POST['alias']);
        $tbirth =mysqli_real_escape_string($conn,$_POST['tbirth']);
        $batchname =mysqli_real_escape_string($conn,$_POST['batchname']);
        $initiatingGT =mysqli_real_escape_string($conn,$_POST['initiatingGT']);
        $welcomeDate =mysqli_real_escape_string($conn,$_POST['welcomeDate']);
        $welcomeGTGLT =mysqli_real_escape_string($conn,$_POST['welcomeGTGLT']);
        $fName = mysqli_real_escape_string($conn,$_POST['fName']);
        $lName = mysqli_real_escape_string($conn,$_POST['lName']);
        

       
            //checkemail
            $checkemail ="SELECT alias FROM $dbmasterlist WHERE alias ='$alias'";
            $checkemail_run = mysqli_query($conn, $checkemail);
                if(mysqli_num_rows($checkemail_run) > 0)
                
                {
                    //Already Email Exist

                    $_SESSION['error-message'] ="Already Email Exist";
                    header("Location: layout-static.php");
                    exit(0);
                }
                else
                {
                    $user_info ="INSERT INTO $dbmasterlist (alias,tbirth,batchname,initiatingGT,welcomeDate,welcomeGTGLT,fName,lName) 
                    VALUES ('$alias','$tbirth','$batchname','$initiatingGT','$welcomeDate','$welcomeGTGLT','$fName','$lName')";

                    $user_info_run = mysqli_query($conn,$user_info);
                        if($user_info_run)
                        {
                            $_SESSION['error-message'] = "Registered Successfully";
                            header("Location: layout-static.php");
                            exit(0);
                        }
                        else
                        {
                            $_SESSION['error-message'] = "Something Went Wrong";
                            header("Location: layout-static.php");
                            exit(0);
                        }
                }

    }
    else
    {
        header("Location: m-registration.php");
        exit(0);
    }
?>