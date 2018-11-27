function put_in(check)
{
	//alert("Hi...." + data);
	var y = "'" + check + "'";
	var x = document.getElementById("check" + check).checked;
	if(x == true)
	{
		document.getElementById("notice").value = y;
	}
	else if (x == false)
	{
		document.getElementById("notice").value = "";
	}
	
}
