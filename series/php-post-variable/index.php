<?php
// 01. Explain what this variable will be used for and how.
/* It will be used as the password value. When password is
called then it will see that password is equal to $match and use that
*/

$match = 'pass123';
// 02. Explain the process of the following if statment.
/* 1. Checks if password has been sent/subbitted
2.$password = makes sure to define the password variable and set it as
the submitted data.
3. checks if it is empty, if it is not empty it proceeds with the
if then function and checks if password matches submitted and if not it echoes
that is incorrect.  */

if (isset($_POST['password'])) {
  $password = $_POST['password'];
  if (!empty($password)) {
    if ($password==$match) {
    echo 'That is correct!';
  } else {
    echo 'That is incorrect!';

  }
} else {
  echo 'Please enter a password.';
}
}
 ?>

 <form action="index.php" method="POST">
   Password:<br>
   <input type="password" name="password"><br>
   <input type="submit" value="Submit">
 </form>
