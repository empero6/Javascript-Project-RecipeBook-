<?php

session_start();

$account = "Login";
$link = "SignIn.php";

$servername = "localhost";
$username = "sagbenu1";
$password = "sagbenu1";
$database = "sagbenu1";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SESSION['email'] != "") {
    $account = "My Account ";
    $user = $_SESSION['email'];
    $sql = "select first_name from admin where email = '$user'";
    $result = mysqli_query($conn, $sql);
    
    if (($result) && mysqli_num_rows($result) > 0 ){
        $row = mysqli_fetch_array($result);
        $user = $row[0];
    } else {
        $u = explode("@", $user);
        $user = $u[0];
    }
    mysqli_close($conn);
    
    $link = "account.php";
}

?>

<html>

<head>
	<title>Search Results</title>
	<link rel="stylesheet" type="text/css" href="../miniproject1.css">
</head>

<body>
	<div class="navbar">
		<a href="index.php" class="topL">Home</a>
		<img src="../images/codecheflogo.jpg" class="codecheflogo">

	</div>
	<div class="topR">
		<a href="SignIn.php" id="login" class="topRdis"><?php echo $account ?></a>
		<span class="tab"></span>
		<a href="index.php#FAQ" class="topRdis">FAQ</a>
		<span class="tab"></span>
		<a href="index.php#Contact" class="topRdis">Contact</a>
		<span class="tab"></span>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="recipeTitle">Search</div>


	<br>


	<div class="searchBox">
		<form method="POST" action="search.php">
			<div class="inner-form">
				<div class="basic-search">
					<div class="input-field">
						<input id="search" type="text" placeholder="Type Keywords" />
						<div class="icon-wrap">
							<svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true"
								data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 512 512">
								<path
									d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
								</path>
							</svg>
						</div>
					</div>
				</div>
				<div class="advance-search">
					<span class="desc">ADVANCED SEARCH</span>
					<div class="row">
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Diet</option>
									<option>Paleo</option>
									<option>Vegetarian</option>
									<option>Vegan</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Meal</option>
									<option>Breakfast</option>
									<option>Lunch/Dinner</option>
									<option>Snack</option>
								</select>
							</div>
						</div>
						<div class="input-field">
							<div class="input-select">
								<select data-trigger="" name="choices-single-defaul">
									<option placeholder="" value="">Time</option>
									<option>Less than 20 minutes</option>
									<option>Less than 1 hour</option>
									<option>More than 1 hour</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row third">
						<div class="input-field">
							<div class="result-count">
								<span>0 </span>results
							</div>
							<div class="group-btn">
								<button class="btn-delete" id="delete">RESET</button>
								<button class="btn-search" id="submit" name="submit">SEARCH</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<br>
	<br>

	<div class="recipeTitle">Results</div>
	<br>

	<div class="searchResults">
		<p class="search">Nothing matches your search </p>
		<p class="search">Please try again</p>
	</div>

</body>

</html>