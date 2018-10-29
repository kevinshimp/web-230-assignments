<?php

include 'config.inc.php';

$script_name = $_SERVER['SCRIPT_NAME'];

 echo $images;
 ?>

 <form action="<?php echo $script_name; ?>" method="POST">
   <input type = "submit" name="submit" vlaue = "Submit">
</form>
