<h1>My Page</h1>

<?php

$redirect_page = 'http://google.co.uk';
$redirect = true;

if ($redirect==true) {
  header('Location: '.$redirect_page);

}

 ?>
<!--// 01. Explaine what is happening here. header('Location: '.$redirect_page);

it is telling the header what the location is and then the redirect variable is telling it the Location
it wants to redirect thepage to.
 -->
