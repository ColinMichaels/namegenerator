<?php
include_once("config.php");
define('INCLUDE_CHECK',true);
require_once('config.php'); 
require 'functions.php';
require 'connect.php';
include_once("name_generator/functions.php"); 

$locations = array("Grease", "City Oyster", "Big City", "City Cellar" , "West Palm Beach" ,"Boca Raton" ,"Fort Lauderdale" , "Palm Beach Gardens","Orlando","Brooklyn","Delray Beach"); 

$load = array();
 $names =names(100);
?>
<table>
<th>Full Names</th><th>First</th>
<tr><td>
<?php

foreach($names as $name)
{ echo $name->first."&nbsp;".$name->last; } 

 ?>
</td>
<td>
</td>
</table>
<?php 

/*

$sql_insert_table = SITEINT."_orders";
		$sql_insert_fields = "`id`,`".implode("`, `", $keys)."`, `createDate`, `modDate`";
		$sql_insert_values = 	"NULL,'".implode("','",$dbValues)."',CURRENT_TIMESTAMP, CURRENT_TIMESTAMP";
		if(!cm_mysqli_insert($sql_insert_table,$sql_insert_fields,$sql_insert_values)) 
			die("DB INSERT FAILED <br> PLEASE TRY AGAIN<br>".$sql_insert_values); 
		
		*/
		
		?>