<?php
  $host_name = 'db5007199941.hosting-data.io';
  $database = 'dbs5934513';
  $user_name = 'dbu3756952';
  $password = 'TheFastReedSite@123';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p>';
  }
?>
