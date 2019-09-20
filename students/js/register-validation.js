function ValidateRegister()
{
	if (document.regForm.fname.value == "")
	{
        document.regForm.student.style.border = "1px solid #FF0000";
		document.getElementById("fname").innerHTML = "<strong>Please enter your first name.</strong>";
		return false;
	}
	
	if (document.regForm.password.value == "")
	{
        document.regForm.password.style.border = "1px solid #FF0000";
		document.getElementById("pval").innerHTML = "<strong>Please enter your password.</strong>";
		return false;
	}

	if (document.regForm.student.value == "")
	{
        document.regForm.student.style.border = "1px solid #FF0000";
		document.getElementById("uval").innerHTML = "<strong>Please enter your username.</strong>";
		return false;
	}
	
	if (document.regForm.password.value == "")
	{
        document.loginform.password.style.border = "1px solid #FF0000";
		document.getElementById("pval").innerHTML = "<strong>Please enter your password.</strong>";
		return false;
	}
}