function put_in(check)
{
	//alert("Hi...." + data);
	var x = document.getElementById("check" + check).checked;
	if(x == true)
	{
		document.getElementById("notice").value = check;
	}
	else if (x == false)
	{
		document.getElementById("notice").value = "";
	}
	
}
