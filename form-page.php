<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>PHP form to email sample form</title>
<!-- define some style elements-->
</head>


<body>

<!-- Start code for the form-->
<form method="post" name="myemailform" action="form-to-email.php">
	<p>
		<label for='name'>Enter Name: </label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for='email'>Enter Email Address:</label><br>
		<input type="text" name="email">
	</p>
	<p>
		<label for='message'>Enter Message:</label> <br>
		<textarea name="message"></textarea>
	</p>
	<input type="submit" name='submit' value="submit">
</form>

</body>
</html>