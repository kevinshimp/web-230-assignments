<?php
require 'connect.inc.php';
$user_ip = $_SERVER['REMOTE_ADDR'];

function ip_exists($ip) {
  global $user_ip;
  $query = "SELECT `ip` FROM `hits_ip`='$user_ip'";
  $query_run = mysqli_query($query);

}

function ip_add($ip) {
  $query = "INSERT INTO `hits_ip` VALUES ('$ip')";
  $query_run = mysqli_query($query);
}

function update_count() {
$query = "SELECT `count` FROM `hits_count`";
if (@$query_run = mysqli_query($query)) {
  $count = mysqli_result($query_run, 0, 'count');
  $count_inc = $count + 1;

  $query_update = "UPDATE `hits_count` SET `count` = '$count_inc'";
  @$query_update_run = mysqli_query($query_update);

}

}

 ?>
