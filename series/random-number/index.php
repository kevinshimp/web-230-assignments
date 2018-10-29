<?php

if (isset($_POST['roll'])) {
  $rand = rand(1, 6) ;
  echo "You rolled a ".$rand;

}
 ?>
<form action = "index.php" method="POST">
    <input type="submit" name= "roll" value= "Roll dice.">
</form>

<!--
 01. Explaine what the if statment is doing here. if(isset($_POST['roll'])){
Checking if the button has been clicked and telling it to roll if it has been.

 02. Explaine what the rand function is. $rand = rand(1, 6);
it is picking a random number between 1 and 6

 03. Explain a way the $rand might be used in a web application.
Games of chance, ways to give a random user id, ways to generate passwords or captchas.
   -->
