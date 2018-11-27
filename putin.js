function put_in(check,data)
{
	//alert("Hi...." + data);
	var y = data;
	var x = document.getElementById("check" + check).checked;
	if(x == true)
	{
	document.getElementById("notice").value = document.getElementById("notice").value + "[" + y + "]";
	}
	else if (x == false)
	{
		var str = document.getElementById("notice").value ;
		str = str.replace("[" + y + "]","");
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
			ssuccess: function(response) {
                        alert(response);
                    },
                    complete: function() {
                        location.reload();
                    }				
			});
}
function del(meet_id)
{
	alert("คุณต้องการลบการประชุมเรื่อง ");

}