<html>
<head>
<?php
session_start();
if(!isset($_SESSION["authenticated"])) {
	header("Location: login1.php");
	exit;
}

?>
<style>
body {
	background-color: grey;
	background-repeat:no-repeat;
	font-family: Verdana;


}
#content {
	width: 900;
	margin: 0 auto;
	background-color: white;
	border-radius: 4px;
}
#ques {

	width: 800;
	margin: 0 auto;
	border-radius: 4px;
	color: black;
	padding: 5px 5px 5px 5px;
}
#ans {
background-image: -webkit-linear-gradient(bottom, rgb(194,186,194) 30%, rgb(199,195,199) 65%, rgb(199,199,199) 83%);
	width: 800;
	margin: 0 auto;
	border-radius: 4px;
	padding: 5px 5px 5px 5px;
	color: black;
}
textarea { 
	width: 800px;
	height: 100px;
	line-height: 150%;
	margin: 0 auto;
	}
#submit {
		width: auto;
	padding: 9px 15px;
	background: #356AA8;
	border: 0;
	font-size: 14px;
	color: #FFFFFF;
	border-radius: 4px;
	margin-bottom: 10px;
}
#t_details {
	width: 800px;
	margin: 0 auto;
	padding-bottom: 20px;
}
</style>
<title>Teacher Evaluation</title>
</head>
<body>
<div id="content">
<h1><center>Teacher Evaluation</center></h1>
<div id="t_details">
<p>Name: Mr. Kiran Cornelio</p>
<p>Subject: Software Engineering</p>
</div>
<form action="submit2.php" method="post" name="questions">
<div id="ques"><p>How is the teacher's communication skills in class?</p></div><div id="ans">
<input type="radio" name="eval_1" value="5" />Excellent
<input type="radio" name="eval_1" value="3" checked="3" /> Good 
<input type="radio" name="eval_1" value="2" />Average
<input type="radio" name="eval_1" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's understanding of the subject?</p></div><div id="ans">
<input type="radio" name="eval_2" value="5" />Excellent
<input type="radio" name="eval_2" value="3" checked="3" /> Good 
<input type="radio" name="eval_2" value="2" />Average
<input type="radio" name="eval_2" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's regularity in the class?</p></div><div id="ans">
<input type="radio" name="eval_3" value="5" />Excellent
<input type="radio" name="eval_3" value="3" checked="3"/> Good 
<input type="radio" name="eval_3" value="2" />Average
<input type="radio" name="eval_3" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's ability to explain things clearly?</p></div><div id="ans">
<input type="radio" name="eval_4" value="5" />Excellent
<input type="radio" name="eval_4" value="3" checked="3"/> Good 
<input type="radio" name="eval_4" value="2" />Average
<input type="radio" name="eval_4" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's attitude towards students?</p></div><div id="ans">
<input type="radio" name="eval_5" value="5" />Excellent
<input type="radio" name="eval_5" value="3" checked="3"/> Good 
<input type="radio" name="eval_5" value="2" />Average
<input type="radio" name="eval_5" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's methods of teaching?</p></div><div id="ans">
<input type="radio" name="eval_6" value="5" />Excellent
<input type="radio" name="eval_6" value="3" checked="3"/> Good 
<input type="radio" name="eval_6" value="2" />Average
<input type="radio" name="eval_6" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's willingness to solve everyone's doubts?</p></div><div id="ans">
<input type="radio" name="eval_7" value="5" />Excellent
<input type="radio" name="eval_7" value="3" checked="3"/> Good 
<input type="radio" name="eval_7" value="2" />Average
<input type="radio" name="eval_7" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's willingness to give individual help when needed?</p></div><div id="ans">
<input type="radio" name="eval_8" value="5" />Excellent
<input type="radio" name="eval_8" value="3" checked="3"/> Good 
<input type="radio" name="eval_8" value="2" />Average
<input type="radio" name="eval_8" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's interaction outside the classroom</p></div><div id="ans">
<input type="radio" name="eval_9" value="5" />Excellent
<input type="radio" name="eval_9" value="3" checked="3"/> Good 
<input type="radio" name="eval_9" value="2" />Average
<input type="radio" name="eval_9" value="0" /> Poor </div><br/>
<div id="ques"><p>How will you rate teacher's punctuality in the class?</p></div><div id="ans">
<input type="radio" name="eval_10" value="5" />Excellent
<input type="radio" name="eval_10" value="3" checked="3"/> Good 
<input type="radio" name="eval_10" value="2" />Average
<input type="radio" name="eval_10" value="0" /> Poor </div><br/>
<div id="ques"><p>Comments</p></div>
<div id="ans"><textarea name="comment"/></textarea></div> <br/>
<center><input type="submit" value="Submit" id="submit"/> 
</form>
</div>
</body>
</html>