<?php
		require('db/connect-db.php');
		$meet_id = "101";
		$sel_meet = "SELECT * FROM tbl_meeting WHERE id = ".$meet_id;
		$query_meet = mysqli_query($conn,$sel_meet);
		$obj = mysqli_fetch_array($query_meet);
		$group_explode = explode("|",$obj["notice"]);
		echo $obj["notice"];
		/*foreach($group_explode as $group)
		{
			$sel_group = "SELECT * FROM tbl_group WHERE group_name = ".$group;
			$query_group = mysqli_query($conn,$sel_group);
			$obj_group = mysqli_fetch_array($query_group);
			push($obj["group_id"]);
		}*/
?>