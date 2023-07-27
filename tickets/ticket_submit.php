<?php 
  session_start();
  include('dbcon.php');

if(isset($_POST['ticket_details']))
{
    $place = $_POST['place'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $prize = $_POST['prize'];
    $draw = $_POST['draw'];

    $ticket_query = "INSERT INTO ticket_details (Draw, Prize, Place, Date, Time, Day)VALUES('$draw','$prize','$place','$date','$time','$day')";
    $ticket_query_run = mysqli_query($con, $ticket_query);

    if($ticket_query_run)
    {
        echo 'uploaded data ';
        // $_SESSION['status'] = "Uploaded Data";
        // header('Location: display.php');

    }
}
else{
    $_SESSION['status'] = "Data Not Uploaded";
    header('Location: error.php');
}
?>