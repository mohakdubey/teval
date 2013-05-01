<html>
<?php
session_start();
if(!isset($_SESSION["authenticated"])) {
	header("Location: login1.php");
	exit;
}

?>
<style>
body {
	background-color: black;
	font-family: Verdana;

}
#ques {
	background-color: white;
	width: 700;
	margin: 0 auto;
	border-radius: 4px;
	color: black;
	padding: 5px 5px 5px 5px;
}
#ans {
background-color: silver;
	width: 700;
	margin: 0 auto;
	border-radius: 4px;
	padding: 5px 5px 5px 5px;
	color: black;
}
#score {
background-image: -webkit-linear-gradient(bottom, rgb(186,47,47) 3%, rgb(224,72,72) 52%, rgb(230,30,63) 76%);

	border-radius: 3px;
	padding: 2px 2px 2px 2px;
	color: white;
}
#content {
	width: 800;
	margin: 0 auto;
	background-color: white;
	border-radius: 4px;
	margin-bottom: 20px;
	padding-bottom: 30px;
}
#final {
	width:700px;
	margin: 0 auto;
	padding: 40px 10px;
}
#t_details {
	width: 700px;
	margin: 0 auto;
	padding-bottom: 20px;
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
$file="data3.xml";
$evaluation= new SimpleXMLElement($file, null, true);
?>
<h3><center>Results</center></h3>
<div id="t_details">
<p>Welcome, Mrs Rashmi!</p>
</div>
<p><div id="ans">Excellent: <span id="score"> 5.00</span> Good: <span id="score"> 3.00</span> Average: <span id="score">2.00</span> Poor:<span id="score">0.00</span></div></p>
<?php 
	$sum1=0; $sum2=0; $sum3=0; $sum4=0; $sum5=0; $sum6=0; $sum7=0; $sum8=0; $sum9=0; $sum10=0;
	for($i=0; $i<$evaluation->count; $i++) {
		$sum1= $sum1 + $evaluation->one[$i];
		$sum2= $sum2 + $evaluation->two[$i];
		$sum3= $sum3 + $evaluation->three[$i];
		$sum4= $sum4 + $evaluation->four[$i];
		$sum5= $sum5 + $evaluation->five[$i];
		$sum6= $sum6 + $evaluation->six[$i];
		$sum7= $sum7 + $evaluation->seven[$i];
		$sum8= $sum8 + $evaluation->eight[$i];
		$sum9= $sum9 + $evaluation->nine[$i];
		$sum10= $sum10 + $evaluation->ten[$i];
	}
	$avg1=$sum1/($evaluation->count);
	$avg2=$sum2/($evaluation->count);
	$avg3=$sum3/($evaluation->count);
	$avg4=$sum4/($evaluation->count);
	$avg5=$sum5/($evaluation->count);
	$avg6=$sum6/($evaluation->count);
	$avg7=$sum7/($evaluation->count);
	$avg8=$sum8/($evaluation->count);
	$avg9=$sum9/($evaluation->count);
	$avg10=$sum10/($evaluation->count);
	$c_avg=($avg1+$avg2+$avg3+$avg4+$avg5+$avg6+$avg7+$avg8+$avg9+$avg10)/10;
?>
<div id="ques"><p>How is the teacher's communication skills in class?</p></div>
<div id="ans">Average score: <span id="score"><?php echo number_format($avg1, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's understanding of the subject?</p></div>
<div id="ans">Average score: <span id="score"><?php echo number_format($avg2, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's regularity in the class?</p></div>
<div id="ans">Average score: <span id="score"><?php echo number_format($avg3, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's ability to explain things clearly?</p></div>
<div id="ans">Average score: <span id="score"><?php echo number_format($avg4, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's attitude towards students?</p></div>
<div id="ans">Average score: <span id="score"><?php echo number_format($avg5, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's methods of teaching?</p></div>
<div id="ans">Average score: <span id="score"><?php echo number_format($avg6, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's willingness to solve everyone's doubts?</p></div>
<div id="ans">Average score: <span id="score"><?php echo number_format($avg7, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's willingness to give individual help when needed?</p></div>
<div id="ans">Average score: <span id="score"><?php echo number_format($avg8, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's interaction outside the classroom?</p></div>
<div id="ans">Average score:<span id="score"><?php echo number_format($avg9, 2); ?></span></div>
<div id="ques"><p>How will you rate teacher's punctuality in the class?</p></div>
<div id="ans">Average score:<span id="score"><?php echo number_format($avg10, 2); ?></span></div>
<div id="final"><u>Final score:</u><span id="score"><?php echo number_format($c_avg, 2); ?></span></div>
<div id="ques"><p>Comments:</p></div>
<div id="ans"><?php 
	for($j=0; $j<$evaluation->count; $j++) { ?>
	<hr/>
	<?php echo $evaluation->comment[$j]; ?>
	<?php } ?> 
	</div>
	<p><center><a href="login1.php" id="button">Login Page</a></center></p>
</div>
