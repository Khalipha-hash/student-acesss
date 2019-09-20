function CheckMessage()
{   
	if (document.messageform.message.value == "")
	{
        document.getElementById("messageval").style.padding = "10px";
		document.getElementById("messageval").innerHTML = "<span class='glyphicon glyphicon-warning-sign'></span><br />You can't send an empty message.";
		setTimeout(location.reload.bind(location), 3000);
        return false;
        
	}
}