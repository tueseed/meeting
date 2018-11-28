<?php
	$method = $_SERVER["REQUEST_METHOD"];
	if($method == "POST")
	{
		require('db/connect-db.php');
		$meet_id = $_POST["meet_id"];
		$del_meet = "DELETE FROM tbl_meeting WHERE id = ".$meet_id;
		mysqli_query($conn,$del_meet);
		echo "ลบการประชุมเรียบร้อย";
	}
?>