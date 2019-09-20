function CheckMemStudent()
{
	if (document.memform.oldmem.value == "")
	{
        document.getElementById("omval").style.padding = "10px";
		document.getElementById("omval").innerHTML = "<span class='glyphicon glyphicon-warning-sign'></span><br />Insert your old memorial word";
		return false;
	}
    
    if (document.memform.newmem.value == "")
	{
        document.getElementById("nmval").style.padding = "10px";
		document.getElementById("nmval").innerHTML = "<span class='glyphicon glyphicon-warning-sign'></span><br />Insert your new memorial word";
		return false;
	}
    
    if (document.memform.password.value == "")
	{
        document.getElementById("pval").style.padding = "10px";
		document.getElementById("pval").innerHTML = "<span class='glyphicon glyphicon-warning-sign'></span><br />Insert your password to confirm changes";
		return false;
	}
	
}