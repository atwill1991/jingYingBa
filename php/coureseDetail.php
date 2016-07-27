<?php 
	include_once("./conn.php");
	$sql="select * from coureslist where `id`=".$_POST["id"];
	$result=mysql_query($sql);
	if(mysql_affected_rows()>0){
		$row=mysql_fetch_assoc($result);
		echo '{"id":'.$row["id"].',"imgsrc":"'.$row["imgsrc"].'","title":"'.$row["title"].'","sold":"'.$row["sold"].'","score":"'.$row["score"].'"}';
	}
 ?>