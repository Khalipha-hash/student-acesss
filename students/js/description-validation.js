function CheckPost()
{
	if (document.postform.post.value == "")
	{
        document.getElementById("postval").style.padding = "10px";
		document.getElementById("postval").innerHTML = "<span class='glyphicon glyphicon-warning-sign'></span><br />You haven't said anything!";
		return false;
	}
	
}

function CheckForum()
{
    
    if (document.forumform.title.value == "")
	{
        document.getElementById("topval").style.color = "#ff2323";
		document.getElementById("topval").innerHTML = "You need to insert a topic title!";
		return false;
	}
    
    if (document.forumform.body.value == "")
	{
        document.getElementById("disval").style.color = "#ff2323";
		document.getElementById("disval").innerHTML = "You haven't said anything!";
		return false;
	}
	
}

function CheckReply()
{
	if (document.replyform.replybody.value == "")
	{
        document.getElementById("repval").style.color = "#ff2323";
		document.getElementById("repval").innerHTML = "You haven't said anything!";
        setTimeout(location.reload.bind(location), 3000);
		return false;
	}
	
}