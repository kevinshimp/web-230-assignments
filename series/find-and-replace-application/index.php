<?php
  // 01.Explain why we are creating the $offset variable and what it is being used for.

      /*We create it to tell our function where to start. We are using it to ensure that our whileloop function starts
      at the beginning of our string which is and offset value of 0.*/
$offset = 0;
  // 02.Explain what we are doing in the if statement and why we would do it.

        /* It checks if the text, searchfor and replacewith variables are set. We do this to make sure that the user
        fills in each piece of data to give the variable a value.   */
if (isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){

    // 03.Provide a reason why we would make a variable to capture a variable we could already use.

          /*  To make sure that the variable is getting used for the current if statement and can be found.  */
    $text = $_POST['text'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];
    // 04.Explain why we need to create this variable $search_length.

          /* Without it the whileloop will only replace the first instance of the word. This search_length
          helps by looping once and then adding the first searchlength as an offset value to begin the search for
          the next instance.   */
    $search_length = strlen($search);
      if(!empty($text)&&!empty($search)&&!empty($replace)){
        while ($strpos = strpos($text, $search, $offset)) {
          // 05.Explain why we change the value of the $offset variable here.

              /* It is set to 0 so it will start at 0 characters each time the loop would go around and only
              replace the first instance of the searched word. If we change it to add the first search onto the
              second loop around then it will find each instance after that and replace them all.  */
          $offset = $strpos + $search_length;

          // 06.Explain what we are doing here to the $text variable.

              /* Updating it later in the function to become the return value of the substr_replace function.  */
          $text = substr_replace($text, $replace, $strpos, $search_length);
        }
        echo $text;
      } else {
        // 07.Explain why we include this here.

            /* To ensure that all of the fields are filled in and to remind the user to fill them all in if
            they missed one by accident.  */
        echo 'Please fill in all fields.';
      }
  }
?>
<hr>
<!-- 08.Explain the action and method attributes. -->

    <!--  Action is a way to direct the form to whatever file or page it needs to perform the action
  on/submit the form to. Method describes what kind of method that it is going to use to send or POST the data.  -->
<form action="index.php" method="POST">
  <textarea name="text" rows="6" cols="30"></textarea><br><br>
  Search for:<br>
  <input type="text" name="searchfor"><br><br>
  Replace with:<br>
  <input type="text" name="replacewith"><br><br>
  <!-- 09.Explain what the type and value attributes are and do. -->

      <!-- the type is where you tell the processor what kind of input you wish to use. In this case it is a submit
    button and the value is what the button will say or what will be in the input type.  -->

  <input type="submit" value="Find and Replace">
</form>
