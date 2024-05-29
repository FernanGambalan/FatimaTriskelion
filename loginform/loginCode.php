<?php 
session_start();
include ('../admin/config/dbconnect.php');

if(isset($_POST['submit-login']))
{
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $login_query = "SELECT * FROM $dbuser WHERE username = '$username' AND password = '$password'";
        $login_query_run = mysqli_query($conn, $login_query);

        if(mysqli_num_rows($login_query_run) > 0)
        {
            foreach($login_query_run as $data)
            {
                $userid = $data['id'];
                $userFullname = $data['firstname']." ".$data['lastname'];
                $username = $data['username'];
                $role_as = $data['role_as'];

            }

            $_SESSION['auth'] = true;
            $_SESSION['role_as'] = "$role_as"; // admin =1 , user = 0
            $_SESSION['auth_users'] = 
            [
            'users_id' => $userid,
            'usersFullname' => $userFullname, 
            'username' => $username
            ];

            if($_SESSION['role_as'] == '1')
            {
                header('Location: ../admin');
                exit(0);

            }
            elseif($_SESSION['role_as'] == '0')
            {
                header('Location: ../index.php');
                exit(0);
            }          

        }
        else
        {
            $_SESSION['message'] ="INVALID PASSWORD";
            header('Location: ../loginform/register.php');
            exit(0);

        }
}
else
{
    header('Location: ../loginform/register.php');
    exit(0);
}

?>