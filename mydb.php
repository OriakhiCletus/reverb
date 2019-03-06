<?php
$connect = mysql_connect('localhost', 'root', '  ');
if (!$connect)
	die('Not Connected');

$select = mysql_select_db("mydb", $connect);
if (!$select)
	die ("Can't connect");

$query="";
$result=mysql_query($query);
?>