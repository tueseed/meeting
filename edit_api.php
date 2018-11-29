<?php
	$method = $_SERVER["REQUEST_METHOD"];
	if($method == "POST")
	{
	require('db/connect-db.php');
	$meeting_id = $_POST["id"];
	$meeting_topic = $_POST["meeting_topic"];
	$meeting_date = $_POST["meeting_date"];
	$meeting_time = $_POST["meeting_time"];
	$meeting_time2 = $_POST["meeting_time2"];
	$meeting_place = $_POST["meeting_place"];
	$meeting_detail = $_POST["meeting_detail"];
	$notice = $_POST["notice"];
	$link = $_POST["link"];
	$date1 = strtotime($meeting_date);
	$date2 = date("d-m-Y",$date1);
	$sql_update_meet = "UPDATE tbl_meeting SET meeting_topic='$meeting_topic',meeting_date='$date2',meeting_time='$meeting_time',meeting_time2='$meeting_time2',meeting_place='$meeting_place',meeting_detail='$meeting_detail',notice='$notice',link='$link' WHERE id='".$meeting_id."'";
	mysqli_query($conn,$sql_update_meet);
	echo "ปรับปรุงข้อมูลสำเร็จ";
	}
	else
	{
		echo "Method Not Allow!!!!";
	}
	?>