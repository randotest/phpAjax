<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Example API</title>
	<script src="./script.js" defer></script>
</head>
<body style="width: 80%; margin: auto;">
	<h1>simple AJAX API to retieve users phone number based on name:
	<form style="text-align: center;">
		<label>
			First Name:
			<input type="text" id="fname" name="fname">
		</label> <br>
		<label>
			Last Name:
			<input type="text" id="lname" name="lname">
		</label> <br>
		<label>
			Phone:
			<input disabled type="text" id="phone" name="phone">
		</label> <br>
		<button type="button" onclick="getInput()">Get details</button>
	</form>	
</body>
</html>