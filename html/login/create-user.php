<?php 
	include_once("conn.php");
	$phone=$_POST["createPhone"];
	$password=$_POST["createPwd2"];
	// 先查询数据库是否存在该手机号码：
	$sql1="SELECT * FROM `user_name` WHERE `phone` = '$phone'";
	// 3.执行sql语句：
	mysql_query($sql1);
	if(mysql_affected_rows()>0){
		echo '{"msg":"2"}';
		exit();// 如果存在则，不执行之后的语句：
	}
	// 如果不存在则进行下一步操作：
	$sql="INSERT INTO `jingyinba`.`user_name` (`id`, `username`, `password`, `phone`) VALUES (NULL, '', '$password', '$phone')";
	// 3.执行sql语句：
	mysql_query($sql);
	if(mysql_affected_rows()>0){
		echo '{"msg":"1"}';
	}else{
		echo '{"msg":"0"}';
	}
 ?>