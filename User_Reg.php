<html>
	<head>
		<title>User Registration</title>
		<link rel="stylesheet" type="text/css" href="theme.css">
	</head>
	<body>
		<center>
			<table>
				<tr>
					<td><img src="user_reg_icon.png" alt="User Registration Icon" width = "100" height="100"></td>
					<td><h1>User Registration</h1></td>
				</tr>
			</table>
		</center>
		<form name="userregform" onsubmit="return chkform()" action="user_reg_db.php" method="post">
			<fieldset>
				<legend>Personal Information</legend>
				<table cellpadding="5">
					<tr>
						<td><b>First Name *</b></td>
						<td><input type = "text" name = "firstname" maxlength="30" required/></td>
					</tr>
					<tr>
						<td><b>Last Name *</b></td>
						<td><input type = "text" name = "lastname" maxlength="30" /></td>
					</tr>
					<tr>
						<td><b>Gender *</b></td>
						<td><b>Male</b>
						<input type = "radio" name="gender" value="male" /></td>
						<td><b>Female</b>
						<input type = "radio" name="gender" value="female" /></td>
					</tr>
					<tr>
						<td><b>Date Of Birth</b></td>
						<td>
							<input type="date" name="dob" maxlength="10"/>
						</td>
					</tr>
					<tr>
						<td><b>Aadhar Card Number *</b></td>
						<td><input type="text" name="aadharno" maxlength="12" /></td>
					</tr>
				</table>
			</fieldset>
			<fieldset>
				<legend>Communication Information</legend>
				<fieldset>
					<legend>Billing Address</legend>
					<table cellpadding="5">
						<tr>
							<td><b>Address *</b> <br /><br /><br /></td>
							<td><textarea name="Address" rows="4" cols="30"></textarea></td>
						</tr>
						<tr>
							<td><b>City</b></td>
							<td><input type="text" name="City" maxlength="30" /></td>
						</tr>
						<tr>
							<td><b>Pin Code *</b></td>
							<td><input type="text" name="Pin_Code" maxlength="6" /></td>
						</tr>
						<tr>
							<td><b>State</b></td>
							<td><input type="text" name="State" maxlength="30" /></td>
						</tr>
						<tr>
							<td><b>Country *</b></td>
							<td><input type="text" name="Country" value="India" /></td>
						</tr>
					</table>
				</fieldset>
				<fieldset>
					<legend>Contact Information</legend>
					<table cellpadding="5">
						<tr>
							<td><b>Mobile Number *</b></td>
							<td><input type="text" name="mobileno" maxlength="10" /></td>
						</tr>
						<tr>
							<td><b>Alternate Mobile Number</b></td>
							<td><input type="text" name="altmobileno" maxlength="10" /></td>
						</tr>
						<tr>
							<td><b>Email ID *</b></td>
							<td><input type="email" name="emailid" maxlength="50" /></td>
						</tr>
					</table>
				</fieldset>
			</fieldset>
			<fieldset>
				<legend>Password Credentials</legend>
				<table cellpadding="5">
					<tr>
						<td><b>Password</b></td>
						<td><input type="password" name="passone" maxlength="20" /></td>
					</tr>
					<tr>
						<td><b>Reenter Password</b></td>
						<td><input type="password" name="passtwo" maxlength="20" /></td>
					</tr>
				</table>
			</fieldset>
			<center>
				<table cellpadding="5">
					<tr>
						<td><button type="submit" class="button" name="save">Submit</button></td>
						<td><button type="reset" class="button">Reset</button></td>
					</tr>
				</table>
			</center>
		</form>
	</body>
	<script>
		function chkform()
		{
			var firstname = document.forms["userregform"]["firstname"];
			var lastname = document.forms["userregform"]["lastname"];
			var gender = document.forms["userregform"]["gender"];
			var acnum = document.forms["userregform"]["aadharno"];
			var address = document.forms["userregform"]["Address"];
			var pincode = document.forms["userregform"]["Pin_Code"];
			var country = document.forms["userregform"]["Country"];
			var mobile = document.forms["userregform"]["mobileno"];
			var email = document.forms["userregform"]["emailid"];
			var passone = document.forms["userregform"]["passone"];
			var passtwo = document.forms["userregform"]["passtwo"];

			if(firstname.value == "")
			{
				window.alert("Please Enter First Name !");
				firstname.focus();
				return false;
			}
			if(lastname.value == "")
			{
				window.alert("Please Enter Last Name !");
				lastname.focus();
				return false;
			}
			if(gender.value == "")
			{
				window.alert("Please Enter Gender !");
				gender.focus();
				return false;
			}
			if(acnum.value == "")
			{
				window.alert("Please Enter Aadhar Card Number !");
				acnum.focus();
				return false;
			}
			if(address.value == "")
			{
				window.alert("Please Enter Address !");
				address.focus();
				return false;
			}
			if(pincode.value == "")
			{
				window.alert("Please Enter Pincode !");
				pincode.focus();
				return false;
			}
			if(country.value == "")
			{
				window.alert("Please Enter Country !");
				country.focus();
				return false;
			}
			if(mobile.value == "")
			{
				window.alert("Please Enter Mobile Number !");
				mobile.focus();
				return false;
			}
			if(email.value == "")
			{
				window.alert("Please Enter Email ID !");
				email.focus();
				return false;
			}
			var n = passone.localeCompare(passtwo);
			var x = 1;
			if(n == x)
			{
				window.alert("Password Mismatch");
				passone.focus();
				return false;
			}
			return true;
		}
	</script>
</html>