<?php
	$notice = $_POST["notice"];
	$group_explode = explode("|",$obj["notice"]);
	foreach($group_explode as $group)
		{
			$group_return = $group_return."/".$group;
		}
	echo "ได้แระจ้า...".$group_return;
?>