function validateForm()
    {
        var a=document.forms["Form"]["meeting_topic"].value;
        
        if (a==null || a=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }
	
function put_in(check,data)
{
	//alert("Hi...." + data);
	var y = data;
	var x = document.getElementById("check" + check).checked;
	if(x == true)
	{
	document.getElementById("notice").value = document.getElementById("notice").value + "|" + y;
	}
	else if (x == false)
	{
		var str = document.getElementById("notice").value ;
		str = str.replace("|" + y,"");
		document.getElementById("notice").value = str;
	}
	
}
function send()
{
	var formData = new FormData();
	formData.append('meeting_topic', $("#meeting_topic").val());
	formData.append('meeting_date', $("#meeting_date").val());
    formData.append('meeting_time', $("#meeting_time").val());
    formData.append('meeting_time2', $("#meeting_time2").val());
    formData.append('meeting_place', $("#meeting_place").val());
    formData.append('meeting_detail', $("#meeting_detail").val());
	formData.append('notice', $("#notice").val());
	formData.append('link', $("#link").val());
	$.ajax({
			url: 'creat_meeting.php',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
                        alert(response);
                    },
                    complete: function() {
                        location.reload();
                    }				
			});
}
function del(meet_id,meet_topic)
{
	var alt = confirm("คุณต้องการลบการประชุมเรื่อง " + meet_topic);
	if(alt == true)
	{
		var formData = new FormData();
		formData.append('meet_id', meet_id);
		$.ajax({
			url: 'del_meeting.php',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
                        alert(response);
                    },
                    complete: function() {
                        location.reload();
                    }				
			});
	}
}
function push_now(meet_id)
{
	//alert('ส่งข้อความแจ้งเตือนตอนี้เหรอ');
	var formData = new FormData();
		formData.append('meet_id', meet_id);
		$.ajax({
			url: 'testpush.php',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
                        alert(response);
                    },
                    complete: function() {
                        location.reload();
                    }				
			});
	
	
	
}
function send_edit(id,topic,d,t,t1,place,detail,notice,link)
{
	document.getElementById("meeting_id").value = id;
	document.getElementById("meeting_topic").value = topic;
	document.getElementById("meeting_date").value = d;
	document.getElementById("meeting_time").value = t;
	document.getElementById("meeting_time2").value = t1;
	document.getElementById("meeting_place").value = place;
	document.getElementById("meeting_detail").value = detail;
	document.getElementById("link").value = link;
	document.getElementById("notice").value = notice;
	var formData = new FormData();
		formData.append('notice', notice);
		$.ajax({
			url: 'checknotice.php',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
						var obj = jQuery.parseJSON(response);
						var i = 0;
						while(obj[i])
						{
							document.getElementById("check" + obj[i]).checked = true;
							i++;
						}
                        
                    }				
			});
}
function reset_check()
{
	location.reload();
}

function edit()
{
	var formData = new FormData();
	formData.append('id', $("#meeting_id").val());
	formData.append('meeting_topic', $("#meeting_topic").val());
	formData.append('meeting_date', $("#meeting_date").val());
    formData.append('meeting_time', $("#meeting_time").val());
    formData.append('meeting_time2', $("#meeting_time2").val());
    formData.append('meeting_place', $("#meeting_place").val());
    formData.append('meeting_detail', $("#meeting_detail").val());
	formData.append('notice', $("#notice").val());
	formData.append('link', $("#link").val());
	$.ajax({
			url: 'edit_api.php',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
                        alert(response);
                    },
                    complete: function() {
                        location.reload();
                    }				
			});
	
	
	
}