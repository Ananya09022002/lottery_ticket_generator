<?php
session_start();
include "header.php" ; 
include "dbcon.php" ;
?>
<form action="index.php" method="POST">
    <div>
<?php
$query = "SELECT Ticket_num FROM ticket WHERE ID='$user_id'";
$query_run = $query_run = mysqli_query($con, $query);
for ($x = 1; $x <= 50; $x++) {
    $randNumber = rand(100000,999999);
    echo '<div><br>';
    echo $randNumber;
    echo '<br><input type="checkbox" name="lottery_num'.$x.'" value="'.$randNumber.'">';
    echo '</div>'.PHP_EOL;
}
?>
<button type="submit" name="printTicket">PRINT</button>
</form>
<?php include "footer.php" ; ?>