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

<center>
	<h1>Daftar User</h1>
	<a href="User/add" style="color: #3399ff">+ tambah</a>
	<table border="1">
		<tr>
			<th>Username</th>
			<th>Fullname</th>
			<th>Level</th>
			<th colspan="2">Action</th>
		</tr>
		<?php foreach ($isi->result() as $value): ?>
			<tr>
				<td><?php echo $value->username; ?></td>
				<td><?php echo $value->fullname; ?></td>
				<td><?php echo $value->level; ?></td>
				<td><a href="delete/<?php echo $value->id; ?>">Hapus</a></td>
				<td><a href="update/<?php echo $value->id; ?>">Edit</a></td>
			</tr>
		<?php endforeach ?>
	</table>
</center>
</body>
</html>