<!DOCTYPE html>
<html>
<title>Cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css"> 
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body class = "w3-container">

<div class = " w3-bar w3-highway-brown w3-text-amber">
	<h3 class = "w3-bar-item w3-xxlarge w3-center-align"><strong>UPS Grill</strong></h3>

	<button class = "w3-bar-item w3-button w3-xlarge w3-padding-14 w3-margin-top w3-highway-brown w3-text-white w3-hover-brown">Breakfast</button>
	<a href="lunch.php" class="w3-bar-item w3-button w3-xlarge w3-padding-14 w3-margin-top w3-highway-brown w3-text-white w3-hover-brown">Lunch</a>


	<div class = "w3-dropdown-hover">
		<button class = "w3-button w3-xlarge w3-padding-14 w3-margin-top w3-highway-brown w3-text-white w3-hover-brown">Extras</button>
		<div class="w3-dropdown-content w3-bar-block w3-card-4">
			<a href="C:\Users\ZDS6TQS\Desktop\ActiveIncidents.html" class="w3-bar-item w3-button">Drinks</a>
			<a href="C:\Users\ZDS6TQS\Desktop\ClosedIncidents.html" class="w3-bar-item w3-button">Chips</a>
			<a href="#Dinner" class="w3-bar-item w3-button">Dessert</a>
		</div>
	</div>

	<div class="w3-dropdown-hover w3-margin-right w3-right">

		<button class = "w3-button w3-highway-brown w3-text-white w3-hover-brown"><i class="material-icons w3-xxlarge w3-padding-16 w3-margin-right w3-right">person</i>
	 		<li class="w3-xlarge w3-margin-top w3-margin-right w3-right w3-padding-15">Profile</li></button>
	 	<div class="w3-dropdown-content w3-bar-block w3-card-4">
	 		<a href="#Settings" class="w3-bar-item w3-button">Settings</a>
	 		<a href="#SignOut" class="w3-bar-item w3-button">Log Out</a>
	 	</div>
	 </div>

	<button class="w3-button w3-xlarge w3-right w3-margin-right w3-highway-brown w3-hover-brown w3-margin-top">Cart</button>

</div>

<div class= "container">
	<h3 class="w3-center w3-xxxlarge"><strong> Checkout </strong></h3>
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-present="#accordion" href="#collapse1"> Items </a>
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">
						<table class = "w3-table-all w3-hoverable">
							<thead>
								<tr class = "w3-light-grey">
								<th>Item</th>
								<th>Price</th>
								<th>Quantity/Option</th>
								</tr>
							</thead>

<?php 

echo "hi";

$quantity = file_get_contents("php://input");
$quantity = explode("=", $quantity);
$quantity = str_replace("quantity", '', $quantity);
$quantity = str_replace("&", '', $quantity);


var_dump($quantity);

?>