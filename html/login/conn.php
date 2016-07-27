<?php 
	header("Content-Type:text/html;charset=utf8");
	// 1.打开数据库：
	$url="localhost:3306";
	$root="root";
	$pwd="root";
	$conn=@mysql_connect($url,$root,$pwd);
	if(!$conn){
		echo "数据库连接失败";
	}
	// 2.选择数据库并且设置数据库的查询字符集；
	mysql_select_db("jingyingba");
	mysql_query("set names utf8");
 ?>