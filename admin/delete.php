<?php

include'../db.php';
//select records from database
$Id=$_GET['id'];

$sql=mysql_query("DELETE FROM customer WHERE id=$Id",$db);
if($sql)
{
echo "<h3 style='background:red;color:white'>Customer is disconnected </h3>";
include'manage.php';	
}
else{
echo "<h2 style='background:red;color:white'>not Disconnected</h2>";
include'manage.php';	
}

?>