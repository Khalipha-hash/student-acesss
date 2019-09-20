function CheckForum()
{
    
    if (document.forumform.post.value == "")
	{
        document.getElementById("topval").style.padding = "10px";
		document.getElementById("topval").innerHTML = "You need to insert a topic title!";
		return false;
	}
    
    if (document.forumform.post.value == "")
	{
        document.getElementById("disval").style.padding = "10px";
		document.getElementById("disval").innerHTML = "You haven't said anything!";
		return false;
	}
	
}