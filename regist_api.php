<?php
	require('db/connect-db.php');
	$uid = $_POST["uid"];
	$name_lastname = $_POST["name_lastname"];
	$pos = $_POST["pos"];
	$office = $_POST["office"];
	$sql_member = "INSERT INTO tbl_group(group_id,group_name,pos,office) VALUES('$uid','$name_lastname','$pos','$office')";
	$query_member = mysqli_query($conn,$sql_member);
	echo "เพิ่มข้อมูลสำเร็จ";
?>