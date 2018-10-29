<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SEVER['REMOTE_ADDR'];


//01. Explain what the following conditional statment is doing.
//It ischecking to see if there is an ip addres and if there is it sets it to be the client ip address.
// Then if it is not then it checks for http_x_forwarded and if that is empty as well it makes the ip address the remote one.
if (!empty($http_client_ip)) {
  $ip_address = $http_client_ip;
} else if (!empty($http_x_forwarded_for)) {
  $ip_address = $http_x_forwarded_for;
} else {
  $ip_address = $remote_addr;
}

echo $ip_address;
 ?>
