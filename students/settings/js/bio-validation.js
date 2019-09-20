function CheckUpdateStudent()
{
	if (document.editform.bio.value == "")
	{
        document.getElementById("bioval").style.padding = "10px";
		document.getElementById("bioval").innerHTML = "<span class='glyphicon glyphicon-warning-sign'></span><br />Nothing to update on your bio!";
		return false;
	}
	
}