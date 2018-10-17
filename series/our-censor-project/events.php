<html>
<head>  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/style.css"><meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header><a href="index.php"><h1>Insights | Communications Portal - Events</h1></a> <h2>our connections to our colleagues</h2> </header>
  <body>

<?php
require 'include/header.inc.php';
 ?>

</br>
<section style="text-align: center;">
<?php

$blue = '<div><h1>'."Blue Jeans Day".'</h1></div><div>'."October 12, 2018".'</div><div>'. " All employees may wear jeans to work".'</div>';
$leave = '<div><h1>'."Leave early day".'</h1></div><div>'."December 22, 2018".'</div><div>'. " All employees may leave work, with pay, at lunch on this day to get started on their holiday plans.".'</div>';
$christmas = '<div><h1>'."Christmas Holiday Closing".'</h1></div><div>'."December 23, 2018 – December 27, 2018".'</div><div>'. " Our offices will be closed December 23, 2018 through December 27, 2018.".'</div>';


$events = array($blue,$leave, $christmas);

 echo "$events[0]";
 echo "$events[1]";
 echo "$events[2]";

 ?>
</br>
</section>


<footer><i>Copyright © 2018 Insights, LLC. All Rights Reserved.</i> </footer>

</body>
<?php
require 'include/config.inc.php'; ?>
</html>
