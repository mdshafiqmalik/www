<?php
if ($_SERVER["HTTP_HOST"] == "m.shafiqhub.com") {
  $hostName = 'db5007199941.hosting-data.io';
  $dbName = 'dbs5934513';
  $userName = 'dbu3756952';
  $passWord = 'TheFastReedSite@123';

}elseif ($_SERVER["HTTP_HOST"] == "localhost") {
  $hostName = 'localhost';
  $dbName = 'fastreed_db';
  $userName = 'root';
  $passWord = '';
}else {
}

$link = new mysqli("$hostName","$userName","$passWord","$dbName");
if ($link->connect_error) {

  die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
}else {
  echo "Connected";
}
?>
