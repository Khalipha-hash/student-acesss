function CheckFileDescription()
{
    if (document.shareform.description.value == "")
	{
        document.getElementById("desval").style.color = "#ff2323";
		document.getElementById("desval").innerHTML = "You need to include a description for your file upload";
		return false;
	}
}