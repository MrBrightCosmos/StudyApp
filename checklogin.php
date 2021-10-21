<?php
$uid = $_POST['uid'];
$pw = $_POST['pw'];

if($uid == 'Educate' and $pw == 'Educate2110')
{	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:securepage.php");
}
?>