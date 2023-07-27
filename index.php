<?php
 session_start();
 include('dbcon.php');

if(isset($_POST['purchaseLottery']))
{
    $lottery_num = array();
    $user_id = $_SESSION['auth_user'];
    for ($x = 1; $x <= 12; $x++){
        if(isset($_POST['lottery_num'.$x])){
            $lottery_num[$x] =  $_POST['lottery_num'.$x];
            // $query = "SELECT Lottery FROM lottery WHERE  ID='$user_id' INSERT INTO lottery VALUES(null,'$lottery_num[$x]')";
            $query = "UPDATE TABLE lottery SET Lottery='$lottery_num[$x]' WHERE ID='$user_id'')";
            $query_run = mysqli_query($con, $query);
            $query = "INSERT INTO tickets VALUES ('$lottery_num[$x]','$user_id')";
            $query_run = mysqli_query($con, $query);
        }
        else{
        }
    }
        

    if($query_run)
    {
        $_SESSION['status'] = "Tickets Purchased";
        header("Location: error.php");
    }
    else
    {
        $_SESSION['status'] = "Ticket Purchase Failed";
        header("Location: error.php");
    }
}
?>
<!-- 
    if($query_run->num_rows > 0){
            foreach($lottery_num as $num){
            $query = "UPDATE lottery SET Lottery='$num' WHERE ID='$user_id'";
            }
            
        }
        else{
            foreach($lottery_num as $num){
                $query = "INSERT INTO lottery VALUES (null,'$num')";
            }
        }
    SELECT Lottery FROM lottery WHERE  ID='$user_id'
    UPDATE lottery SET Lottery='$lottery_num' WHERE ID='$user_id'
"INSERT INTO lottery (Lottery) VALUES ('$lottery_num')" 

UPDATE lottery SET Lottery='$lottery_num[$x]' WHERE ID='$user_id'
-->