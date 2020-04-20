<?php

session_start();

$user = "Login";
$link = "../SignIn.php";

if ($_SESSION['email'] != ""){
    $user = $_SESSION['email'];
    $u = explode("@",$user);
    $user = $u[0];
    $link = "../account.php";
}

?>

<!doctype html>
<html>
<head>
<title> Code Chefs: Jicama stick snacks </title>
<link rel="stylesheet" type="text/css" href="../../miniproject1.css">

</head>
<body>
<script type = "text/javascript" src = "../../miniproject3.js"></script>
<script type = "text/javascript" src = "../../miniproject1.js"></script>



	<!-- Nav Bar -->
	<div class="navbar">
		<a href="../index.php" class="topL">Home</a><img src="../../images/codecheflogo.jpg"
			class="codecheflogo">
	</div>
	<div class="topR">
		<a href="<?php echo $link ?>" id="login" class="topRdis"><?php echo $user ?></a>
		<a href="../index.php#FAQ" target="_blank">FAQ</a> <span class="tab"></span>
		<a href="../index.php#Contact" target="_blank">Contact</a> <span
			class="tab"></span>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="recipeTitle">Jicama Snack Sticks </div>
	<!-- End of Navbar -->

	<br>
	<br>

	<div>
		<img src="../../images/jicama_sticks.jpg" class="centerImg">
	</div>

	<aside style="flex-basis: 33%; padding: 2em; margin: 2em;">
		<!-- <h3>Paleo Pecan-Maple Salmon</h3> -->
		<p>Ingredients:</p>

		<label class="container"> 1 cup of jicama matchsticks 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> 1 teaspoon of fresh lime juice
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> &frac12 Salt 
		<input type="checkbox"> <span class="checkmark"></span>
		</label> 
	
		<label class="container"> Chili powder
		<input type="checkbox"> <span class="checkmark"></span>
		</label>

		<p>
		Missing something? Click <a href="https://www.instacart.com"
		target="_blank" style="text-decoration: underline;">here</a> for Instacart
		</p>

		<br>
		<p>Directions:</p>

		<label class="container"> Using a medium sized bowl, mix the jicama sticks with the lime juice and &frac18 teaspoons of salt.
		 <input type="checkbox"> <span class="checkmark"></span>
		</label> 

		<label class="container"> Optional: Serve with chili powder
		<input type="checkbox"><span class="checkmark"></span>
		</label> 
	
		<p>(rachelraymag.com)</p>

	</aside>

</body>
</html>