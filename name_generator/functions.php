<?php
/* ------------------------------------------------------------------------------------------------------------------------------------------------- */

function myRand($min, $max)
{
	return rand($min,$max); 
}
/* ------------------------------------------------------------------------------------------------------------------------------------------------- */	
function cap_first($in)
{
	return ucfirst(strtolower($in));
}
/* ------------------------------------------------------------------------------------------------------------------------------------------------- */		
function debug( $data ) {

					if ( is_array( $data ) )
						$output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
					else
						$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

					echo $output;
			}
/* ------------------------------------------------------------------------------------------------------------------------------------------------- */
function names($num)
{
		$out = array();
		$numRecords = $num; 
		$folder = "name_generator/lists/";
		$f_name_file = $folder."dist.male.first.txt";
		$l_name_file = $folder."dist.male.first.txt";
		$female_name_file = $folder."dist.male.first.txt";
		$male_names = file($f_name_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		$last_names = file($l_name_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		$female_names = file($female_name_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		//$fp=fopen("/lists/dist.male.first.txt","r");
		$m_len = count($male_names); 
		$l_len = count($last_names); 
		$f_len = count($female_names); 
		for($i=0; $i<=$numRecords; $i++) 
		{
			$add = array("first" => cap_first($male_names[myRand(0, $m_len)]) , "last" => cap_first($last_names[myRand(0, $l_len)])) ;
			debug(
			array_merge($out, $add); 
		}
		
return $out;
}
/* ------------------------------------------------------------------------------------------------------------------------------------------------- */
?>