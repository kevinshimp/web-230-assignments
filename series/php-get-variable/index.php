<?php

// 01. Explain what the following if statement is doing.
/*  It is checking if the value for the $_GET day date and Year
are set and then if they are not empty it is telling the browser where to
get it. The else is if there ie no value in the field at all it will
request that you fill in all fields.    */

if (isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
$day = $_GET['day'];
$date = $_GET['date'];
$year = $_GET['year'];

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
