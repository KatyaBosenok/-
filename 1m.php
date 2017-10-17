<?php
$width=10;
$height=5;
$arr=[];

for ($i=0; $i<$height; $i++){
	$line=[];
	for ($j=0; $j<$width; $j++){
		$line[]=rand(0,100);
	}
	$arr[]=$line;
	
}
echo "<table border=1>";
foreach ($arr as $line){
	echo "<tr>";
	foreach ($line as $element){
		echo "<td><p> $element </p></td>"; 
	}
	
}
echo "</table>";
?>