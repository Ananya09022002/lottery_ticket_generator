<?php 
  session_start();
  include('dbcon.php');

if(isset($_POST['loginUser']))
{
    $user_id = $_POST['ID'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM lottery WHERE ID='$user_id' AND password='$password'";
    $log_query_run = mysqli_query($con, $log_query);

    if(mysqli_num_rows($log_query_run) > 0)
    {
        foreach($log_query_run as $row){
            $user_id = $row['ID'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = $user_id;

        $_SESSION['status'] = "LOGIN SUCCESSFUL";
        header('Location: display.php');

    }
}
else{
    $_SESSION['status'] = "ACESS DENIED";
    header('Location: login.php');
}
?>