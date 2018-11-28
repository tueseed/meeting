<?php

function flex_msg($topic,$d,$t,$t1,$place,$detail)
{	
	$json1 = '{
				"type":"flex",
				"altText":"แจ้งเตือนการประชุม",
				"contents":{
								"type": "bubble",
								"header": {
												"type": "box",
												"layout": "horizontal",
												"contents": [
																{
																	"type": "text",
																	"text": "THE ASSISTANT",
																	"weight": "bold",
																	"color": "#5b2a72",
																	"align": "center",
																	"size": "md"
																}
															]
											},
								"hero": {
												"type": "image",
												"url": "https://meetingnotify.herokuapp.com/pic/the-assist.png",
												"size": "full",
												"aspectRatio": "20:13",
												"aspectMode": "cover"
										},
								"body": {
											"type": "box",
											"layout": "vertical",
											"spacing": "sm",
											"contents": [
														  {
															"type": "text",
															"text": "แจ้งเตือนการประชุม",
															"size": "xl",
															 "align": "center",
															"weight": "bold"
														  },
														  {
															"type": "box",
															"layout": "vertical",
															"spacing": "sm",
															"contents": [
																		{
																			"type": "box",
																			"layout": "baseline",
																			"contents": [
																							{
																								"type": "icon",
																								"url": "https://meetingnotify.herokuapp.com/pic/content.png"
																							},
																							{
																								"type": "text",
																								"text": "เรื่อง '.$topic.'",
																								"weight": "bold",
																								"margin": "sm",
																								"flex": 0
																							}
																						]
																		},
																		{
																			"type": "box",
																			"layout": "baseline",
																			"contents": [
																							{
																								"type": "icon",
																								"url": "https://meetingnotify.herokuapp.com/pic/calendar.png"
																							},
																							{
																								"type": "text",
																								"text": "วันที่ '.$d.'",
																								"weight": "bold",
																								"margin": "sm",
																								"flex": 0
																							}
																						]
																		},
																		{
																			"type": "box",
																			"layout": "baseline",
																			"contents": [
																							{
																								"type": "icon",
																								"url": "https://meetingnotify.herokuapp.com/pic/alarm-clock.png"
																							},
																							{
																								"type": "text",
																								"text":"เวลา '.$t.' ถึง '.$t1.'",
																								"weight": "bold",
																								"margin": "sm",
																								"flex": 0
																							}
																						]
																		},
																		{
																			"type": "box",
																			"layout": "baseline",
																			"contents": [
																							{
																								"type": "icon",
																								"url": "https://meetingnotify.herokuapp.com/pic/school.png"
																							},
																							{
																								"type": "text",
																								"text":"สถานที่ '.$place.'",
																								"weight": "bold",
																								"margin": "sm",
																								"flex": 0
																							}
																						]
																		},
																		{
																			"type": "box",
																			"layout": "baseline",
																			"contents": [
																							{
																								"type": "icon",
																								"url": "https://meetingnotify.herokuapp.com/pic/meeting.png"
																							},
																							{
																								"type": "text",
																								"text": "ผู้เข้าประชุม",
																								"weight": "bold",
																								"margin": "sm",
																								"flex": 0
																							}
																						]
																		}
																		]
															},
															{
																"type": "text",
																"text": "'.$detail.'",
																"wrap": true,
																"color": "#aaaaaa",
																"size": "xxs"
															}
														]
										},
								"footer": {
											"type": "box",
											"layout": "vertical",
											"contents": [
														  {
															"type": "spacer",
															"size": "xs"
														  },
														  {
															"type": "button",
															"style": "primary",
															"color": "#5b2a72",
															"action": {
																		  "type": "uri",
																		  "label": "เอกสารการประชุม",
																		  "uri": "https://linecorp.com"
																		}
															}
														]
										}
							}
	}';
	$result = json_decode($json1);
	return $result;
}
?>