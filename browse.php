<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shady Business Site</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
	<?php require_once("header.php") ?>
	<main>
		<h1>Welcome to our shopping cart</h1>
			<!-- need to create a for loop to populate the products menu -->
			<?php 

			$productsArray = [
				['Mac', 'Made by Apple', 1000000],
				['Linux', 'Best to learn some command line commands', 0],
				['Windows', 'Are blue screens of death part of the past?', 66]
			];

			echo (<select name="product">);
			for ($i = 0, i < count($productsArray), i++){
				echo ('<option value=' .$i '>' . $productsArray[i][0] . '</option>');
			}
			?>
		<form action="product.php">
			<label>Products:</label>
			<select name="product"> 
				<option value="1">Mac</option>
				<option value="2">Linux</option>
				<option value="3">Windows</option>
			</select>


			<!-- I had split up the product and quantity into two different forms.  It didn't submit
			the product info then.  doh! -->
			<label>Quantity:</label>
			<input type="number" name="quantity" value="1" min="1" max="7">
			<!-- <select name="quantity">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
			</select> -->
			<button>Submit</button>
		</form>


<!-- 			<a href="product.php?product=001">Mac</a></div>
<div><a href="product.php?product=002">Linux</a></div>
<div><a href="product.php?product=003">Windows</a></div> -->
	</main>
	<?php require_once("footer.php") ?>
</body>	
</html>