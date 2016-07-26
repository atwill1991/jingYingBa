<?php 
	$url="localhost:3306";
	$root="root";
	$pwd="root";	
	$connect=@mysql_connect($url,$root,$pwd) or die("数据库连接失败");
	mysql_select_db("jingyinba");
	mysql_query("set names utf8");
 ?>