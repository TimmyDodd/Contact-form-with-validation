		function validateForm(){
			var name = document.forms["contact-form"]["Name"].value;
			var telephone = document.forms["contact-form"]["Tel"].value;
			var email = document.forms["contact-form"]["Email"].value;
			var comments = document.forms["contact-form"]["Message"].value;
			if (name==null || name=="" || name==" "){
				document.getElementById("Name").style.border = "1px dotted red";
				alert("Please enter a valid Name.");
				return false;
			}else {
				document.getElementById("Name").style.border = "2px inset";
			}
			if (telephone==null || telephone=="" || telephone==" "){
				document.getElementById("Tel").style.border = "1px dotted red";
				alert("Please enter a valid Phone Number.");
				return false;
			}else {
				document.getElementById("Tel").style.border = "2px inset";
			}
			if (email==null || email=="" || email==" "){
				document.getElementById("Email").style.border = "1px dotted red";
				alert("Please enter a valid E-mail Address.");
				return false;
			}else {
				document.getElementById("Email").style.border = "2px inset";
			}
			if (comments==null || comments=="" || comments==" "){
				document.getElementById("Message").style.border = "1px dotted red";
				alert("Please enter a comment.");
				return false;
			}else {
				document.getElementById("Message").style.border = "2px inset";
			}
		}
