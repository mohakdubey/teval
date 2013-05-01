<?php 
    session_start();
    define("USER1", "100911463");
    define("PASS1", "shilpa");
	define("USER2", "100911469");
    define("PASS2", "binay");
    define("USER3", "100911520");   
    define("PASS3", "utsav");
    define("USER4", "100911557");
    define("PASS4", "aditi");
    define("USER5", "100911559");
    define("PASS5", "yugansh");
    define("USER6", "100911525");
    define("PASS6", "bhawna");
    define("USER7", "100911535");
    define("PASS7", "aditi");
    define("USER8", "jagmohan");
    define("PASS8", "jagmohan");
    define("USER9", "kiran");
    define("PASS9", "kiran");
    define("USER10", "rashmi");
    define("PASS10", "rashmi");
    $file="login_info.xml";
$login= new SimpleXMLElement($file, null, true);
    if (isset($_POST["user"]) && isset($_POST["pass"]))
    {
        if (($_POST["user"] == USER1 && $_POST["pass"] == PASS1))
          {
           if($login->student[0]==0) {
             $_SESSION["authenticated"] = TRUE;
             $login->student[0]=1;
            file_put_contents($file, $login->asXML());
             header("Location: teacher1.php");
             exit;
           } 
           else
            echo "your evaluation is done. you cannot log in again. Sorry.";
          } 
                if (($_POST["user"] == USER2 && $_POST["pass"] == PASS2))
          {
           if($login->student[1]==0) {
             $_SESSION["authenticated"] = TRUE;
             $login->student[1]=1;
            file_put_contents($file, $login->asXML());
             header("Location: teacher1.php");
             exit;
           } 
           else
            echo "your evaluation is done. you cannot log in again. Sorry.";
          } 
        if (($_POST["user"] == USER3 && $_POST["pass"] == PASS3))
          {
           if($login->student[2]==0) {
             $_SESSION["authenticated"] = TRUE;
             $login->student[2]=1;
            file_put_contents($file, $login->asXML());
             header("Location: teacher1.php");
             exit;
           } 
           else
            echo "your evaluation is done. you cannot log in again. Sorry.";
          } 
        if (($_POST["user"] == USER4 && $_POST["pass"] == PASS4))
          {
           if($login->student[3]==0) {
             $_SESSION["authenticated"] = TRUE;
             $login->student[3]=1;
            file_put_contents($file, $login->asXML());
             header("Location: teacher1.php");
             exit;
           } 
           else
            echo "your evaluation is done. you cannot log in again. Sorry.";
          } 
        if (($_POST["user"] == USER5 && $_POST["pass"] == PASS5))
          {
           if($login->student[4]==0) {
             $_SESSION["authenticated"] = TRUE;
             $login->student[4]=1;
            file_put_contents($file, $login->asXML());
             header("Location: teacher1.php");
             exit;
           } 
           else
            echo "your evaluation is done. you cannot log in again. Sorry.";
          } 
                  if (($_POST["user"] == USER6 && $_POST["pass"] == PASS6))
          {
           if($login->student[5]==0) {
             $_SESSION["authenticated"] = TRUE;
             $login->student[5]=1;
            file_put_contents($file, $login->asXML());
             header("Location: teacher1.php");
             exit;
           } 
           else
            echo "your evaluation is done. you cannot log in again. Sorry.";
          }         
          if (($_POST["user"] == USER7 && $_POST["pass"] == PASS7))
          {
           if($login->student[6]==0) {
             $_SESSION["authenticated"] = TRUE;
             $login->student[6]=1;
            file_put_contents($file, $login->asXML());
             header("Location: teacher1.php");
             exit;
           } 
           else
            echo "your evaluation is done. you cannot log in again. Sorry.";
          }        
        if (($_POST["user"] == USER8 && $_POST["pass"] == PASS8))
          {
             $_SESSION["authenticated"] = TRUE;
             header("Location: t_res.php");
             exit;
          } 
     if (($_POST["user"] == USER9 && $_POST["pass"] == PASS9))
          {
             $_SESSION["authenticated"] = TRUE;
             header("Location: t_res2.php");
             exit;
          }
          if (($_POST["user"] == USER10 && $_POST["pass"] == PASS10))
          {
             $_SESSION["authenticated"] = TRUE;
             header("Location: t_res3.php");
             exit;
          }


    }



          // || ($_POST["user"] == USER2 && $_POST["pass"] == PASS2) ||($_POST["user"] == USER3 && $_POST["pass"] == PASS3) ||($_POST["user"] == USER4 && $_POST["pass"] == PASS4) ||($_POST["user"] == USER5 && $_POST["pass"] == PASS5)) {
          
	
 ?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<style>
body {
  background: url('back.jpg');
  background-repeat:no-repeat;
  font-family: Verdana;

}
#content {
  width: 400px;
margin-left: auto;
    margin-right: auto;
    margin-top: 150px;
  background-color: white;
  border-radius: 4px;
  padding: 10px 10px 10px 10px;
  text-align: center;
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
<html xmlns="http://www.w3.org/1999/xhtml"> 
  <head>
    <title> Student Log in</title>
  </head>
  <body> 
  <div id="content">
  <h4>Teacher Feedback Application</h4>
  <br><br>
  
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Login As: <select>
  <option>Student</option>
  <option>Teacher</option>
  <option>HOD</option>
</select>
 <p> Username:
          <input name="user" type="text" /></p>
        <p>Password:
          <input name="pass" type="password" /></p>
<p><input type="submit" value="Log In" id="button" />     </p>
    </form>

    <?php if (count($_POST) > 0) echo "INVALID LOGIN!"; ?><br>
    </div>
  </body>
</php>
