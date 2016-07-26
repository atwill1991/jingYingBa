<?php 
	include_once("conn.php");
	$dataArr=array();
	for($i=1;$i<181;$i++){
		$sql="select * from `coureslist` where `id`=".$i;
		$result=mysql_query($sql);
		if(mysql_affected_rows()>=0){
			$row=mysql_fetch_assoc($result);
			$objArr=array("id"=>$row["id"],"imgsrc"=>$row["imgsrc"],"title"=>$row["title"],"sold"=>$row["sold"],"score"=>$row["score"],"area"=>$row["area"],"Class"=>$row["class"]);
			array_push($dataArr,$objArr);			
		}
	}
	$CourseData=json_encode($dataArr);
	echo $CourseData;
 ?>