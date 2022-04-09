<?php
include "../../config/secrets.php";
isConnected();
function isConnected()
{
  $link = new mysqli($host_name, $user_name, $password, $database);
 if ($link->connect_error) {
   die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
 } else {
   echo '<p>Connection to MySQL server successfully established.</p>';
 }

}

?>
