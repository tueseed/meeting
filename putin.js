function put_in(check,check1)
{
	//alert("Hi...." + data);
	var y = check1;
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
