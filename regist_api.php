<?php
	require('db/connect-db.php');
	$uid = $_POST["uid"];
	$name_lastname = $_POST["name_lastname"];
	$pos = $_POST["pos"];
	$office = $_POST["office"];
	$sql_member = "INSERT INTO tbl_group(group_id,group_name,pos,office) VALUES('$uid','$name_lastname','$pos','$office');
	$query_member = mysqli_query($conn,$sql_member);
	$result = array();
	while($res = mysqli_fetch_array($query_member))
	{
		array_push($result,$res);
	}
	
	echo json_encode($result);
?>