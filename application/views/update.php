<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<body>

<h1>Update Data User</h1>
<center>
	<table>
		<?php foreach ($isi->result() as $value): ?>
			<form method="post" action="../updateAction/<?php echo $value->id ?>">
			<tr><td><input type="hidden" name="id" value="<?php echo $value->id; ?>"></td></tr>
			<tr><td><input type="text" name="username" value="<?php echo $value->username; ?>"></td></tr>
			<tr><td><input type="password" name="password" value="<?php echo $value->password; ?>"></td></tr>
			<tr><td><input type="text" name="fullname" value="<?php echo $value->fullname; ?>"></td></tr>
			<tr><td><input type="text" name="level" value="<?php echo $value->level; ?>"></td></tr>
			<tr><td><input type="submit" name="Update"></td></tr>
			</form>
		<?php endforeach ?>
	</table>
</center>
</body>
</html>