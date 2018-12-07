<?php
	require('db/connect-db.php');
	require('render_msg.php');
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
		
		echo $nums.$obj["notice"];
		if($nums == 0 || $nums == 1)
		{
			$group_explode = explode("|",$obj["notice"]);
			foreach($group_explode as $group)
			{
				$sel_group = "SELECT * FROM tbl_group WHERE group_name = '".$group."'";
				$query_group = mysqli_query($conn,$sel_group);
				$obj_group = mysqli_fetch_array($query_group);
				push($obj_group["group_id"],$obj["meeting_topic"],$obj["meeting_date"],$obj["meeting_time"],$obj["meeting_time2"],$obj["meeting_place"],$obj["meeting_detail"]);
			}
			
		}
	}
	function push($id,$topic,$d,$t,$t1,$place,$detail)
		{
		$access_token = '49sz8gFlKIm8wRU5fkeJF3VFZ0+RVe9vwv56SD68F0njV69PJCXRA3FyanXUDFx+THLRYmp3PscYBPBnTLdJyP/H61NkMX4VvcqBD3xageuhXzEq7QZyk02ie+QEvhdGtsDHNPLdV1XR2XnGO62U8gdB04t89/1O/w1cDnyilFU=';
        //$messages = [ 'type' => 'text','text' => "jdakljkskljd"];
		$messages = flex_msg($topic,$d,$t,$t1,$place,$detail);
        $url = 'https://api.line.me/v2/bot/message/push';
        $data = ['to' => $id,'messages' => [$messages]];
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