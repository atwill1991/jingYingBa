<?php 
	include_once("conn.php");
	$phone=$_POST["loginPhone"];
	$password=$_POST["loginpwd"];
	$sql="SELECT * FROM `user_name` WHERE `phone` = '$phone'";
	// 3.执行sql语句：
	$result=mysql_query($sql);
	if(mysql_affected_rows()>0){
		$row=mysql_fetch_assoc($result);
		if($password==$row["password"]){
			echo '{"msg":"1"}';
		}else{
			echo '{"msg":"2"}';
		}
	}else{
		echo '{"msg":"0"}';
	}
 ?>