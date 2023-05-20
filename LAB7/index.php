<!DOCTYPE html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>User Registration</h2>
<p>Please complete the following form to register with our site:</p>
<table>
<tr>
<td>User Name:</td>
<td><input type="text" name="txtUserName" size="20" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pwdPassword" size="20" /></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="radio" name="radSex" value="male" />Male</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="radSex" value="female" />Female</td>
</tr>
<tr>
<td>How did you hear about us?:</td>
<td>
<select name="selReferrer">
<option selected="selected" value="">Select answer</option>
<option value="website">Another website</option>
<option value="printAd">Magazine ad</option>
<option value="friend">From a friend</option>
<option value="other">Other</option>
</select>
</td>
</tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr>
<td>Please select this box if you wish<br /> to be added to our mailing list
<br /><small>We will not pass on your details to any third
party.</small></td>
<td><input type="checkbox" name="chkMailingList" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Register now" /></td>
</tr>
</table> 
<tr><td>&nbsp;</td><td>&nbsp;</td></tr> 
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table> 
</body>
</html>
