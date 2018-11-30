<?php
	require('db/connect-db.php');
	$uid = $_POST["uid"];
	$sql_member = "SELECT * FROM tbl_group WHERE group_id = '".$uid."'";
	$query_member = mysqli_query($conn,$sql_member);
	$result = array();
	while($res = mysqli_fetch_array($query_member))
	{
		array_push($result,$res);
	}
	
	echo json_encode($result);
?>