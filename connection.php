<?php
// Creat Connection
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db('rosem', $con)or die(mysql_error());

?>