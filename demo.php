<?php include "header.php" ; ?>
<?php
if(isset($_POST['loginUser']))
{
    $user_id = $_POST['ID'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM Lottery WHERE ID='$user_id' AND password='$password'";
    $log_query_run = mysqli_query($con, $log_query);
}
?>
<?php include "footer.php" ; ?>