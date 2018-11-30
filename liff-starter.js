window.onload = function (e) {
    liff.init(function (data) {
        initializeApp(data);
    });
};

function initializeApp(data) 
{
    //document.getElementById('useridfield').textContent = data.context.userId;
	var a = data.context.userId;
	document.getElementById('uid').value = a;
    
}
function check_member()
{
	document.getElementById("uid").readOnly = false;
	/*var formData = new FormData();
	formData.append('uid', $("#uid").val());
	$.ajax({
			url: 'check_member.php',
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
			});*/
	
}