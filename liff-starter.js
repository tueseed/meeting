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