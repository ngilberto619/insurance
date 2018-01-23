<?php
$db=mysql_connect('localhost','root', '');
if($db){
	mysql_select_db("insurance",$db) or die(" can not connect");
}
else{
	echo"sorry can not connect to the database";
}
?>