<?php
session_start();
#var_dump($_SESSION);
#$when=$_SESSION["expires"];
#echo "when" .$when;
//if($_SESSION['expires'] <= time() || !isset($_SESSION['username'])){
	
	//header('Location: /logout.php');
//if (!isset($_SESSION['id']) && (time() - $_SESSION['CREATED'] > 10)) {
	//if (!isset($_SESSION['CREATED'])){
    // last request was more than 30 minutes ago
	
	
   // session_unset();     // unset $_SESSION variable for the run-time 
   // session_destroy();   // destroy session data in storage
  // $_SESSION['LAST_ACTIVITY'] = time();
if(!isset($_SESSION['username'])){
?>
<style>
body {
    background-image: url("background.jpg");
}
</style>

<div style="width:0px; height:0px; background-color:#ffffff"></div>
<div style="margin-top:50px">
	<h1 style="color:#000099; font-size:40px; font-weight:bold" align="center"> Welcome to Universal Chat Room</h1>
<form name="form2" action="login.php"   method="post">
<table width="350px" height="400px" border="0" bgcolor="#003399" align="center">

<tr>
<td style="padding-left:15px; font-size:30px; color: #ffffff; font-weight:bold" >
Please Login Here!
</td>
</tr>

<tr>

<td style="padding-left:15px; padding-right:15px ; font-size:20px"><input type="text" name="username" placeholder="Type your username" style="width:300px; height:45px; padding:5px "></td><br/>
</tr>
<tr>

<td style="padding-left:15px; padding-right:15px ; font-size:20px"><input type="password" name="password" placeholder="Type your password" style="width:300px; height:45px ; padding:5px"></td><br/>
</tr>
<tr>
<td colspan="2" style="padding-left:15px; padding-right:15px"><input type="submit" name="submit" value="Login" style="width:300px;  height:45px; padding:5px; font-size:20px; font-weight:bold; color:#000099"></td>

<tr>
<td colspan="2" style="padding-left:15px; font-size:25px; color:#000099; font-weight:bold " ><Button type="button" name="register"  style="width:300px;  height:45px; padding:5px; font-size:20px; font-weight:bold; color:#000099"><a class="button" href="register.php">Register</a></button></td>
</tr>
</table>

	</div>
<?php
 exit;
}
?>

<html>
<head>
<title>Chat Box</title>

<?php

//if($_SESSION['expires'] <= time()){
	
//header('Location: /logout.php');
	
//}


?>
<link rel = "stylesheet" type="text/css" href ="chat.css"/>
<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script>

function register(){

window.location.href = "register.php";

}

function logout(){ 

	<?php
//session_start();

//session_destroy();
?>
window.location.href = "index.php";

}

function submitChat(){
 if(form1.msg.value == '' ){
  alert('Enter your message!!!');
  return;
 }
 


 var msg = form1.msg.value;
 
 
    if(msg.match("<script>"))
    {
      alert("Dont try to be Smart!");
      form1.msg.value='';
      return;
    }
    if (msg.match("javascript:")){
      alert("Dont try to be Smart!");
      form1.msg.value='';
      return;  
    }
   
 
 var xmlhttp = new XMLHttpRequest();
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
 
           }
 
 }
 xmlhttp.open('GET','insert.php?&msg='+msg, true);
 xmlhttp.send();
 
 form1.msg.value='';
 
}
$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#chatlogs').load('logs.php');}, 4000);
});
</script>

<style>
body {
    background-color: #6699ff;
}
</style>
</head>
<body>

<?php
//echo "Hellooo";
//echo $_SESSION['expires'];
//while($_SESSION['expires'] > time()){

?>	
	<h1 style="text-align:right; margin-right:50px"> Welcome, <b><?php echo $_SESSION['username']; ?></b> </h1>
	<h2 style="text-align:right; margin-right:50px" > <a href= "logout.php">Logout</a></h2>
<form name = "form1">
<div style="width:600px; margin-left:300px; padding:50px">
<div id="chatlogs" class="chatlog" style=" height:600px; width:600px; border: 1px solid #000;   background-color:#ffffff; 
    overflow-y: auto;  text-align:left; float:left; padding-left:5px; padding-bottom: 7px"> 
LOADING CHATLOGS PLEASE WAIT...
</div>
<table style="padding-left:0px">
	<tr>
		<td style="padding-left:0px">

<textarea rows="4"  name="msg" placeholder="Type a msg..." style="width:520px; height:50px">

</textarea>
		<td style="padding-left:0px"><input type="Button" class= "button" value="Send" name="send" onclick= "submitChat()" style="width:80px; height:50px; padding-left:0px"></td>

</tr></table>

</div>

</form>

</body>

</html>

