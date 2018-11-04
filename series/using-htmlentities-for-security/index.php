<?php


if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
// 01. Explain what htmlentities is doing.
/*  Takes html written in text box and displays it on the page as written
 instead of processing it on the page   */
$day = htmlentities($_GET['day']);
$date = htmlentities($_GET['date']);
$year = htmlentities($_GET['year']);

  if (!empty($day)&&!empty($date)&&!empty($year)) {

    echo 'It is '.$day. ' '.$date.' '.$year;
    } else {
      echo 'Fill in all fields.';
    }

}

 ?>

 <form action="index.php" method="GET">
   Day:<br><input type="text" name="day"><br>
   Date:<br><input type="text" name="date"><br>
   Year:<br><input type="text" name="year"><br><br>
   <input type="submit" value="Submit">
 </form>
