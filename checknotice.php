<?php
	$notice = $_POST["notice"];
	$group_explode = explode("|",$notice);
	$result = array();
	foreach($group_explode as $group)
		{
			//$group_return = $group_return."/".$group;
			if($group <> "")
			{
			array_push($result,$group);
			}
		}
	echo json_encode($result);
?>