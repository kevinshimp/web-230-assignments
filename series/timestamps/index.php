<?php

$time = time();
/* 01. Explaine what the time function is. $time = time();
 Shows the amount of seconds from january 1st 1970.
*/
$time_now = date('d M Y @ H:i:s', $time);
/* 02. Explain what the following line of code is doing and how. $actual_time = date('D M Y @ H:i:s', $time);
It is telling the date and time in a correct manor instead of all in seconds.
*/
/*03. Explain what the following line of code is doing and how. $time_modified = date('d M Y @ H:s', $time);
It tells the date and the time in just hours and seconds.
*/

$time_modified = date('d M Y @ H:i:s', $time-(7*24*30*30));

echo 'The time now is '.$time_now.'<br>The time modified is ' .$time_modified;
/*4.Explain a way the $actual_time might be used in a web application. echo '<h3>The current dte/time is: '.$actual_time.'<h3>';
It can be put on a news or weather app as well as any kind of site that relies on time such as a game with day/night cycles
or the wall street stock exchange site to close for the day.
*/

echo $actual_time;
/*5. Explain a way the $time_modified might be used in a web application. echo '<h3>The modified dte/time is: '.$time_modified.'<h3>';
Maybe to show times in other time zones compared to the one that the site is in.
*/
 ?>
