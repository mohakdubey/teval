Thanks for your evaluation !
<?php
$file="data2.xml";
$evaluation= new SimpleXMLElement($file, null, true);

	$evaluation->addChild('one', $_POST["eval_1"]);
	$evaluation->addChild('two', $_POST["eval_2"]);
	$evaluation->addChild('three', $_POST["eval_3"]);
	$evaluation->addChild('four', $_POST["eval_4"]);
	$evaluation->addChild('five', $_POST["eval_5"]);
	$evaluation->addChild('six', $_POST["eval_6"]);
	$evaluation->addChild('seven', $_POST["eval_7"]);
	$evaluation->addChild('eight', $_POST["eval_8"]);
	$evaluation->addChild('nine', $_POST["eval_9"]);
	$evaluation->addChild('ten', $_POST["eval_10"]);
	$evaluation->addChild('comment', $_POST["comment"]);
	$evaluation->count=$evaluation->count+1;
file_put_contents($file, $evaluation->asXML());
header("Location: teacher3.php");
?>