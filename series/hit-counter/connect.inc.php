<?php
     echo 'HTTP HOST: '.$_SERVER['HTTP_HOST'].'<br><br>';
     $conn_error = 'Could not connect.';
     if($_SERVER['HTTP_HOST'] === 'localhost'){
          $mysql_host = 'localhost';
          $mysql_user = 'root';
          $mysql_pass = '';
          $mysql_db = 'a_database';
     }else{
          $mysql_host = 'localhost';
          $mysql_user = 'kevinshimp_ei';
          $mysql_pass = 'raccpass';
          $mysql_db = 'kevinshimp_ei';
     }
     if(!$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db)){
          die($conn_error);
     }
?>
