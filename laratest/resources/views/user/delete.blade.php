<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
    
    <a href="/home"> Back</a> |
	<a href="/logout"> Logout </a> 

	<h2>User Details</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$user['id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$user['name']}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$user['email']}}</td>
		</tr>
	</table>

    <h2>Delete this User?</h2>

	<form method="post">
	<table>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="OK"></td>
		</tr>
	</table>
	</form>

</body>
</html>