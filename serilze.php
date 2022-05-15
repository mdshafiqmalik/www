<?php

// $arrayName = array('year'=>'2022','month' => '7','id'=>'25316532', 'ext'=>'jpg' );
// echo serialize($arrayName);

 // $arrayName ='a:3:{s:4:"year";s:4:"2022";s:5:"month";s:1:"7";s:2:"id";s:8:"25316852";}';
 // var_dump(unserialize($arrayName));
 session_start();
 $_SESSION['HI'] = "one";
 $_SESSION['Hello'] = "two";
 var_dump($_SESSION);
 ?>
