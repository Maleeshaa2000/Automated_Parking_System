function checkPassword()
{
	var v1 = document.getElementById("pwd1").value;
	var v2 = document.getElementById("pwd2").value;
	
	if(v1 != v2)
	{
		alert("Password missmatch!");
	}
	else 
	{
		alert("Success!");
	}
}

function accept()
{
	var chk = document.getElementById("pwd2");
	var sub = document.getElementById("sumbit");

	if(chk.checked)
	{
		sub.disabled = false;
	}
	else
	{
		sub.disabled = true;
	}
}

	
