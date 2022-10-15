<?php
/* Tell search engines that the site is temporarily unavilable */
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' );
?>
<!-- HTML Code goes in between these comment lines (below here)-->
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <style>
      h2  {
        border: 1px solid red;
      }
    </style>
  </head>
  <body>
     <h2>
      Error! Site is under maintenance!
     </h2>
     <h2>
  <?php
    if(isset($_COOKIE["SESSusername"])){
      echo "Hi " . $_COOKIE["SESSusername"] . "?";
    } else {
      echo "Welcome Guest!";
    }
  ?>
</h2>
     <p>
       Website is in development and will be up and reponsive soon.
     </p>
     <form action="/wp-content/cookie_setter.php" method="POST">
      <input type="text" name="username">
      <input type="submit" name="submitButton" value="Save Cookie!">
     </form>
  </body>
</html>
<!-- HTML Code goes in between these comment lines (above here) -->
<?php

/* This passes control back to the wordpress upgrade routine */
die();
/* Don't change this */
?>
