<?php

include 'config.inc.php';

$script_name = $_SERVER['SCRIPT_NAME'];

 echo $images;
 ?>

 <form action="<?php echo $script_name; ?>" method="POST">
   <input type = "submit" name="submit" vlaue = "Submit">
</form>


<!--

/ 01. Explain the $_SERVER['SCRIPT_NAME']. $script_name = $_SERVER['SCRIPT_NAME'];

It puts the script name into the variable to use and shows the servers path.

// 02. Explain what is happening to produce the resulting output of the $images variable. echo $images;
It is calling the images variable in the config file which basically tells the directory to search the images folder in a project.

//03. Explain how using the $script_name variable benefits us.
It is easy to search and call from our folders by starting with the script name and seeing the path. first
-->
