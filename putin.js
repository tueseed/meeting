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
