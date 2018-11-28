<?php
	$method = $_SERVER["REQUEST_METHOD"];
	if($method == "POST")
	{
		require('db/connect-db.php');
		$meet_id = $_POST["meet_id"];
		$sel_meet = "SELECT * FROM tbl_meeting WHERE id =".$meet_id;
		$query_meet = mysqli_query($conn,$sel_meet);
		$obj = mysqli_fetch_array($query_meet);
		$group_explode = explode("|",$obj["notice"]);
		foreach($group_explode as $group)
		{
			$sel_group = "SELECT * FROM tbl_group WHERE group_name = '".$group."'";
			$query_group = mysqli_query($conn,$sel_group);
			$obj_group = mysqli_fetch_array($query_group);
			push($obj_group["group_id"]);
		}
		
	}
	function push($group_id)
	{
		$access_token = '49sz8gFlKIm8wRU5fkeJF3VFZ0+RVe9vwv56SD68F0njV69PJCXRA3FyanXUDFx+THLRYmp3PscYBPBnTLdJyP/H61NkMX4VvcqBD3xageuhXzEq7QZyk02ie+QEvhdGtsDHNPLdV1XR2XnGO62U8gdB04t89/1O/w1cDnyilFU=';
        $messages = [ 'type' => 'text','text' => "ทดสอบๆๆๆ";
        $url = 'https://api.line.me/v2/bot/message/push';
        $data = ['to' => $group_id,'messages' => [$messages]];
        $post = json_encode($data);
        $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch); 	
	}
?>