<?php

function flex_msg()
{	
	$json1 = '{
				"type":"flex",
				"altText":"PSQ V.2",
				"contents":{
								"type": "bubble",
								"hero": {
											"type": "image",
											"url": "https://nutt-i.com/psqv2/PSQV2.png",
											"size": "full",
											"aspectRatio": "20:13",
											"aspectMode": "cover",
											"action": {
														"type": "uri",
														"uri": "https://nutt-i.com/psqv2/PSQV2.png"
														}
										},
								"body": {
											"type": "box",
											"layout": "vertical",
											"contents": [{
															"type": "text",
															"text": "ผลการค้นหา",
															"weight": "bold",
															"align":"center",
															"size": "md"
														},
														{
															"type": "text",
															"text": "คำว่า ",
															"weight": "bold",
															"align":"center",
															"size": "sm"
														},
														{
															"type": "text",
															"text": "1235132156",
															"weight": "bold",
															"align":"center",
															"size": "sm"
														},
														{
															"type": "separator",
															"margin": "xxl"
														}]
										},
								"footer": {
											"type": "box",
											"layout": "vertical",
											"spacing": "sm",
											"contents": [
												{
													"type": "button",
													"style": "primary",
													"height": "sm",
													"action": {
																"type": "uri",
																"label": "56456456",
																"uri": "https://nutt-i.com/psqv2"
															}
												},
												{
													"type": "button",
													"style": "primary",
													"height": "sm",
													"action": {
																"type": "uri",
																"label": "45454545",
																"uri": "https://nutt-i.com/psqv2"
															}
												},
												{
													"type": "button",
													"style": "primary",
													"height": "sm",
													"action": {
																"type": "uri",
																"label": "ค้นหาแบบส่วนตัว(ทดลองใช้)",
																"uri": "line://app/1544181630-9YeX5qxR"
															}
												},
												{
													"type": "spacer",
													"size": "sm"
												}
												],
									"flex": 0
									}
					
				
			}
	}';
	$result = json_decode($json1);
	return $result;
}
?>