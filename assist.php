<?php
require('db/connect-db.php');//เรียกใช้ file connect-db
function reply_msg($txtback,$replyToken)//สร้างข้อความและตอบกลับ
{
    $access_token = '49sz8gFlKIm8wRU5fkeJF3VFZ0+RVe9vwv56SD68F0njV69PJCXRA3FyanXUDFx+THLRYmp3PscYBPBnTLdJyP/H61NkMX4VvcqBD3xageuhXzEq7QZyk02ie+QEvhdGtsDHNPLdV1XR2XnGO62U8gdB04t89/1O/w1cDnyilFU=';
    $messages = ['type' => 'text','text' => $txtback];//สร้างตัวแปร 
    $url = 'https://api.line.me/v2/bot/message/reply';
    $data = [
                'replyToken' => $replyToken,
                'messages' => [$messages],
            ];
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
    echo $result . "\r\n";
}
	$content = file_get_contents('php://input');//ประกาศตัวแปรชื่อ content เพื่อรับข้อมูลจากไลน์
	$events = json_decode($content, true);//แปลง json เป็น php
	if (!is_null($events['events']))
	{
		foreach ($events['events'] as $event)
		{
			if ($event['type'] == 'message' && $event['message']['type'] == 'text')
			{
				$replyToken = $event['replyToken']; //เก็บ reply token เอาไว้ตอบกลับ
				$txtin = $event['message']['text']; //เอาข้อความจากไลน์ใส่ตัวแปร $txtin
				//$sql_text = "SELECT * FROM tbl_nuthapong WHERE name LIKE '%".$txtin."%'";
				//$query = mysqli_query($conn,$sql_text);
				//$num_rows = mysqli_num_rows($query);
				/*while($obj = mysqli_fetch_array($query))
				{
					$txtback = $txtback." ".$obj["lastname"];
					
				}*/
				//$txtback = "ผลการค้นหา ".$num_rows." รายการ https://eass1-bot.herokuapp.com/nutthapong/result.php?keyword=".$txtin;
				$txtback = "123456789";
				reply_msg($txtback,$replyToken);
			}
		}
	}
echo "OKJAA";