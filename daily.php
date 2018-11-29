<?php
	date_default_timezone_set("Asia/Bangkok");
	$d1 = strtotime('21-12-2018');
	$d2 = date('d-m-Y',$d1);
	$today = date('d-m-Y');
	$da = date_create($d2);
	$db = date_create($today);
	$num_day = date_diff($da,$db);
	$nums = $num_day->days;
	echo $nums;


?>