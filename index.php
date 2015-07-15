<?php
define('INCLUDE_CHECK',true);
include_once("name_generator/functions.php"); 

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
		
		?>