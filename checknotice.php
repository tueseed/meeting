<?php
	require('db/connect-db.php');
	$notice = $_POST["notice"];
	$group_explode = explode("|",$notice);
	$result = array();
	foreach($group_explode as $group)
		{
			//$group_return = $group_return."/".$group;
			if($group <> "")
			{
				$sel_group = "SELECT * FROM tbl_group WHERE group_name = '".$group."'";
				$query_group = mysqli_query($conn,$sel_group);
				$obj_group = mysqli_fetch_array($query_group);
				array_push($result,$obj_group["group_num"]);
			}
		}
	echo json_encode($result);
?>