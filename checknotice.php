<?php
	$notice = $_POST["notice"];
	$group_explode = explode("|",$notice);
	foreach($group_explode as $group)
		{
			//$group_return = $group_return."/".$group;
			array_push($result,$group);
		}
	echo $group_explode;
?>