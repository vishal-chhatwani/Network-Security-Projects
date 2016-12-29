<?php 
$con = mysqli_connect('localhost', 'root','', 'chatbox');
//mysqli_select_db('chatbox', $con);
$result1 = mysqli_query($con,"SELECT * FROM logs ORDER by id ");

while($extract = mysqli_fetch_array($result1)){
 echo "<span class='uname'>". $extract['username']. "</span><span class='msg'> : " . $extract['msg']. "</span><br>";
 
}

?>