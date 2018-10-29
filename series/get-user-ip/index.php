<?php

require 'config.inc.php';

foreach($ip_blocked as $ip) {
  if ($ip==$ip_blocked) {
      die('Your IP address, '.$ip_address.' has been blocked.');
  }
}

 ?>

<h1>Welcome!</h1>

<!--
// 01. Explain what this for each loop is doing. foreach ($ip_blocked as $ip) { if($ip == $ip_address){
die('Your IP address, '.$ip_address.' has been blocked'); } }

It is essentially checking each item in the array to see which ip addresses in teh array are blocked.


-->
