<html>

<?php
$file="data3.xml";
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
?>

<style>
body {
  background-repeat:no-repeat;
  font-family: Verdana;

}

  #content{width: 400px;
margin-left: auto;
    margin-right: auto;
    margin-top: 150px;
  background-color: white;
  border-radius: 4px;
  padding: 10px 10px 10px 10px;
  text-align: center;
  opacity: 0.8;
 }
 #button{
      width: auto;
  padding: 9px 15px;
  background: #356AA8;
  border: 0;
  font-size: 14px;
  color: #FFFFFF;
  border-radius: 4px;
  margin-bottom: 10px;
}
</style>
<body>
<div id="content">
<?php 
session_start();
session_destroy();
?>
Thank you for your evaluation.
<br/>
You are now logged out.
<p><a href="login1.php" id="button">Login Page</a></p>
</div>
</body>
</html>
