<?php

include'../db.php';
//select records from database
$Id=$_GET['id'];

$sql=mysql_query("DELETE FROM fire WHERE id=$Id",$db);
if($sql)
{
echo "<h3 style='background:#D1222D;color:white'> disconnected </h3>";
include'fire.php';	
}
else{
echo "<h2 style='background:#D1222D;color:white'>not Disconnected</h2>";
include'fire.php';	
}

?>