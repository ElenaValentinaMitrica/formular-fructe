<html>
	<head><title>Formular Fructe</title></head>
	<link rel = "stylesheet" type = "text/css" href ="formular-fructe.css">
	<body>

		<div id=container>
		<h3 id="title">The World of Fruit</h3>
		<h3 id="subtitle">Fruit Survey</h3>
		<div id="content">
		<form action="procesare-formular-fructe.php" method="POST">
			<p>
				<label for="Name">Name</label>
				<input name="Name" id="Name" type="text">
			</p>
			<p>
				<label for="Address">Address</label>
				<input name="Address" id="Address" type="text">
			</p>
			<p>
				<label for ="Email">Email</label>
				<input name="Email" id = "Email" type="text">
			</p>
			<p>
			<label for ="How many pieces of fruit do you eat per day?">How many pieces of fruit do you eat per day?</label>
			<input name ="quantity" type = "radio" name ="fruit" value ="0">0<br>
			<input name="quantity" type = "radio" name ="fruit" value ="1">1<br>
			<input name="quantity" type = "radio" name ="fruit" value ="2">2<br>
			<input type = "radio" name ="quantity" value ="More than 2" id="radio">More than 2</p>
			<p>
				<label for="My favourite fruit">My favourite fruit</label>
				 <select multiple name="fruits">
	  				<option value="Apple">Apple</option>
	  				<option value="Banana">Banana</option>
	  				<option value="Plum">Plum</option>
	 				<option value="Pomegranate">Pomegranate</option>
				</select>
			</p>
			<p>
				<label for="Would you like a brochure?">Would you like a brochure?</label>
				<input name="brochure" type="checkbox" name="brochure">
			</p>
			<p>
				<label></label>
				<input type="submit" value="Submit">
			</p>
		</form>
		</div>
		</div>
	</body>
</html>
