<?php 
    session_start();
    include ('../admin/config/dbconnect.php');

    if(isset($_POST['register-btn']))
    {
        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $fname =mysqli_real_escape_string($conn,$_POST['firstname']);
        $lname =mysqli_real_escape_string($conn,$_POST['lastname']);
        $email =mysqli_real_escape_string($conn,$_POST['firstname']);
        $contact =mysqli_real_escape_string($conn,$_POST['contact']);
        $password =mysqli_real_escape_string($conn,$_POST['password']);
        $cpassword =mysqli_real_escape_string($conn,$_POST['cpassword']);

        if($password == $cpassword)
        {
            //checkemail
            $checkemail ="SELECT email FROM $dbuser WHERE email ='$email'";
            $checkemail_run = mysqli_query($conn, $checkemail);
                if(mysqli_num_rows($checkemail_run) > 0)
                
                {
                    //Already Email Exist

                    $_SESSION['message'] ="Already Email Exist";
                    header("Location: ../loginform/register.php");
                    exit(0);
                }
                else
                {
                    $user_info ="INSERT INTO $dbuser (username,firstname,lastname,email,contact,password) 
                    VALUES ('$uname','$fname','$lname','$email','$contact','$password')";

                    $user_info_run = mysqli_query($conn,$user_info);
                        if($user_info_run)
                        {
                            $_SESSION['message'] = "Registered Successfully";
                            header("Location: ../loginform/register.php");
                            exit(0);
                        }
                        else
                        {
                            $_SESSION['message'] = "Something Went Wrong";
                            header("Location: ../loginform/register.php");
                            exit(0);
                        }
                }

        }

        else
        {
            $_SESSION['message']="Password and Confirm Password doest Not Match";
            header("Location: ../loginform/register.php");
            exit(0);
        }

    }
    else
    {
        header("Location: ../loginform/register.php");
        exit(0);
    }
?>