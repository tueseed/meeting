<?php
	$method = $_SERVER["REQUEST_METHOD"];
	if($method == "POST")
	{
	require('db/connect-db.php');
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
	$sql_insert_meet = "INSERT INTO tbl_meeting(meeting_topic,meeting_date,meeting_time,meeting_time2,meeting_place,meeting_detail,notice,link) VALUES('$meeting_topic','$date2','$meeting_time','$meeting_time2','$meeting_place','$meeting_detail','$notice','$link')";
	mysqli_query($conn,$sql_insert_meet);
	echo "สร้างการประชุมสำเร็จ";
	}
	else
	{
		echo "Method Not Allow!!!!";
	}
	?>