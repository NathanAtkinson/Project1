<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	/*reports errors.  Only for this page?*/

	/*$result = 'default';*/
	$product = NULL;
	$quantity = NULL;
	$validchoice = true;
	/*have this below for stricter modes of php*/
	if(isset($_GET['product'])) {
		$product = $_GET['product'];
	}

	if(isset($_GET['quantity'])) {
		$quantity = $_GET['quantity'];
	}

	$productsArray = [
		['Mac', 'Made by Apple', 1000000],
		['Linux', 'Best to learn some command line commands', 0],
		['Windows', 'Are blue screens of death part of the past?', 66]
	];

	print_r($productsArray);

	$message = 'You have selected ';
	$message2 = ' You have indicated you would like to buy ';
	/*changed from product names in the get-product.  Changed to numbers
	but wasn't working because was checking product against "001" which is a 
	string.  Removed quotes, no issues.
	PUT THE LOGIC SEPARATE FROM HTML, CAN PUT THE ECHO INTO THE MIDDLE OF HTML	
	001 == 1*/
	if ($product == 1){
		$message .= 'Mac.';
	}
	else if ($product == 2){
		$message .= 'Linux.';
	}
	else  if ($product == 3){
		$message .= "Windows.";
	} 
	else {
		$message .= "something that we don't have. We hope to offer more options soon.";
		$validchoice = false;
	}

	if ($validchoice) {
		if ($quantity == 1) {
			$message = $message . $message2 . $quantity . '.';
		} elseif ($quantity == 2) {
			$message = $message . $message2 . $quantity . '.';
		} elseif ($quantity == 3) {
			$message = $message . $message2 . $quantity . '.';
		} elseif ($quantity == 4) {
			$message = $message . $message2 . $quantity . '.';
		} elseif ($quantity == 5) {
			$message = $message . $message2 . $quantity . '.';
		} elseif ($quantity == 6) {
			$message = $message . $message2 . $quantity . '.';
		} elseif ($quantity == 7) {
			$message = $message . $message2 . $quantity . '.';
		} else {
			$message = $message . $message2 . ' more than we have in stock. You can purchase up to 7 at this time.';
		}
	}

 ?>



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
		<h1>
			<?php echo ($message); ?>
		</h1>
	</main>
	<!-- Didn't have main as a container, and the line was right against the footer -->
	<?php require_once("footer.php") ?>
</body>
</html>