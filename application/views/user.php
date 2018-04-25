<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<style type="text/css">

#input{
	width: 75%;
	height: 1 vh;
	margin: 0;
	padding: 0;
}
#input .header{
	width: 100%;
	background-color: blue;
	text-align: center;
	padding: 25px;
	margin-top: 50px;
}
#input .form{
	padding: 15px 10px;
	margin-top: 15px;
	width: 100%;
	border-radius: 5px;
}
#input .button{
	border: none;
	border-radius: 5px;
	background-color: blue;
}

</style>
<body>

<table>
	<form method="post" action="actionadd">
		<tr><td><input type="text" name="username" placeholder="Username" class="form"></td></tr>
		<tr><input type="password" name="password" placeholder="Password" class="form"></tr>
		<tr><input type="text" name="fullname" placeholder="Username" class="form"></tr>
		<tr><input type="text" name="level" placeholder="Username" class="form"></tr>
		<tr><button class="button">Login</button></tr>
	</form>
</table>

</body>
</html>