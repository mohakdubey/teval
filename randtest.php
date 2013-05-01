<?php
$input = array();
$input2 = array();
for($i=0; $i<50; $i++) {
$input[]=$i;
$input2[]=$i;
}
shuffle($input);
shuffle($input2);
for($i=0; $i<50; $i++)
echo $input[$i].' ';
echo "</br>";
for($i=0; $i<50; $i++)
echo $input2[$i].' ';
//echo $input[$rand_keys[4]] . "\n";
?>