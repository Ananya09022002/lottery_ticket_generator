<?php
session_start();
include "header.php" ;
include "dbcon.php" ; ?>
<form action="index.php" method="POST">
    <div>
<?php
if(isset($_POST['ticket_details']))
{
    $place = $_POST['place'];
    $date = $_POST['date'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $prize = $_POST['prize'];
    $draw = $_POST['draw'];
    
for ($x = 1; $x <= 12; $x++) {
    $randNumber = (string)rand(10000,99999);
    $array = str_split($randNumber);
    echo '<div class="cl-1"><br>';
    echo '<pre><span style="color:#E8018F; font-weight: 700;font-size: 15px"> '.$place. ' </span>           <span style="writing-mode:vertical-lr">BS1</span><span style="writing-mode:horizontal-lr; font-size: 30px;">'.$array[0].'</span><span style="writing-mode:vertical-lr">EIT</span><span style="writing-mode:horizontal-lr; font-size: 30px;">'.$array[1].'</span><span style="writing-mode:vertical-lr">SIX</span><span style="writing-mode:horizontal-lr; font-size: 30px;">'.$array[2].'</span><span style="writing-mode:vertical-lr">TWO</span><span style="writing-mode:horizontal-lr; font-size: 30px;">'.$array[3].'</span><span style="writing-mode:vertical-lr">THR</span><span style="writing-mode:horizontal-lr; font-size: 30px;">'.$array[4].'</span><span style="writing-mode:vertical-lr">FIV</span><br> <span style="color:#333194; font-weight: 700;font-size: 25px">DEAR FLAMINGO-5 </span>               <span style="color:#000000; font-weight: 700;font-size: 18px">'.$draw.' Draw on</span><br> <span style="color:#17AB64; font-weight: 700;font-size: 15px">'.$day.' EVEVNING WEEKNY </span>                    <span style="color:#000000; font-weight: 700;font-size: 18px">'.$date.'</span> <br><span style="color:#E8018F; font-weight: 700; font-size: 12px"> FIRST PRIZE </span>                                  <span style="color:#FF0000; font-weight: 700;font-size: 13px"> '.$time.' ONWARDS</span><br><span style="color:#0096D5; font-weight: 700;font-size: 35px">'.$prize.'000<sub>x5</sub></span>                                   <span style="color:#0096D5; font-weight: 700;font-size: 20px">FRIDAY</span></span><br></pre>';
    echo '<span style="writing-mode:sideways-lr">'.$draw.' Draw on '.$date.'</span><br>';
    echo '<span style="writing-mode:vertical-lr">BS1</span>';
    echo '<span style="color:#000000; font-weight: 700;font-size: 35px">'.$randNumber.'</span>';
    // echo '<br><input type="checkbox" name="lottery_num'.$x.'" value="'.$randNumber.'">';
    echo '</div>'.PHP_EOL;
}
}
?>

<button type="submit" name="purchaseLottery">PURCHASE</button>
</form>
<?php include "footer.php" ; ?>