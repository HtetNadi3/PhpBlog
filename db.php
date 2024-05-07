<?php

$dbhost = "localhost";
$username = "root";
$password = "Hnd2232003";
$dbname = "blog_php_online_class";

$con = mysqli_connect($dbhost, $username, $password, $dbname);
if(!$con){
  echo mysqli_connect_error();
}

