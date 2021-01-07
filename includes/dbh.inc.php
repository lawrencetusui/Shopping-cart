<?php

$servername ="localhost";
$dBUsername="root";
$dBPasswod="";
$dBname ="bazaarceramics_db";

$conn = mysqli_connect($servername,$dBUsername,$dBPasswod,$dBname);
if(!$conn){
  die("Connecion failed:" .mysqli_connect_error());
}
 ?>
