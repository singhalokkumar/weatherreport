<!DOCTYPE html>
<html>

<head>
	<title>Weather Report</title>
	<style>
		html,
		body,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: Arial, Helvetica, sans-serif;
			color: white;
		}

		body {
			background-image: url("background (2).jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
	</style>
</head>

<body>

	<center><br><br>
		<form method="GET" action="get.php">
			<h1>Type City</h1>
			<br>
			<p>For Example Delhi</p>
			<input type="text" name="q" placeholder="Enter City" required>
			<input type="submit" name="submit">
		</form>
	</center>
</body>

</html>