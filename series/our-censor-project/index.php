<html>
<head>  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/style.css"><meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

  <body>
<?php
require 'include/header.inc.php';

 ?>
</br>
<?php


$offset = 0;

if (isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){


    $text = $_POST['text'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];
    $search_length = strlen($search);
      if(!empty($text)&&!empty($search)&&!empty($replace)){
        while ($strpos = strpos($text, $search, $offset)) {

          $offset = $strpos + $search_length;

          $text = substr_replace($text, $replace, $strpos, $search_length);
        }
        echo $text;
      } else {

        echo 'Please fill in all fields.';
      }
  }

?>


<hr>
<form action="index.php" method="POST">
  <textarea name="text" rows="10" cols="50"></textarea><br><br>
  Search for:<br>
  <input type="text" name="searchfor"><br><br>
  Replace with:<br>
  <input type="text" name="replacewith"><br><br>


  <input type="submit" value="Find and Replace">
</form>
<footer><i>Copyright © 2018 Insights, LLC. All Rights Reserved.</i> </footer>

</body>
</html>
