<!DOCTYPE html>
<html>
<head>
	<title>Doctor Assistant</title>
</head>
<body>
	<h1>Doctor Assistant</h1>
	<form method="post" action="process.php">
		<label for="age">Age:</label>
		<input type="number" name="age" required><br><br>
		<label for="gender">Gender:</label>
		<select name="gender" required>
			<option value="">--Select Gender--</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select><br><br>
		<label for="symptoms">Symptoms:</label>
		<textarea name="symptoms" required></textarea><br><br>
		<label for="signs">Signs:</label>
		<textarea name="signs" required></textarea><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
