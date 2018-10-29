<?php
ob_start();
 ?>

<h1>My Page</h1>
This is my page.
<?php

$redirect_page = '';
$redirect = true;

if ($redirect==true) {
  header('Location: '.$redirect_page);

}

ob_end_flush();
 ?>

 <!--
 // 01. Explaine why we use ob_start. ob_start();
It is a way to have a page begin the output buffering and that way it reads through all of the code and allows it to modify everyhing
in the buffer.

 // 02. Explaine what is happening here. header('Location: '.$redirect_page);
 it is telling the header what the location is and then the redirect variable is telling it the Location
 it wants to redirect thepage to.


 // 03. Explaine why we use ob_end_flush.
 To flush the buffer and run the code again producing whatever is on the page first.
 -->
