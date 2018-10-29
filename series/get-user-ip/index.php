<?php

require 'config.inc.php';

foreach($ip_blocked as $ip) {
  if ($ip==$ip_blocked) {
      die('Your IP address, '.$ip_address.' has been blocked.');
  }
}

 ?>

<h1>Welcome!</h1>
