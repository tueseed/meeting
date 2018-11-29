<?php
	require('db/connect-db.php');
	$sql = "SELECT * FROM tbl_meeting";
	$query = mysqli_query($conn,$sql);
	while($obj = mysqli_fetch_array($query))
	{
		date_default_timezone_set("Asia/Bangkok");
		$d1 = strtotime($obj["meeting_date"]);
		$d2 = date('d-m-Y',$d1);
		$today = date('d-m-Y');
		$da = date_create($d2);
		$db = date_create($today);
		$num_day = date_diff($da,$db);
		$nums = $num_day->days;
		echo $nums;
	}

?>