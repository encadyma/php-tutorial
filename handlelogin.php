<?php
include('includes/db.php');

$username = mysqli_real_escape_string($link, $_POST["username"]);
$password = mysqli_real_escape_string($link, $_POST["password"]);

$errors = [];

if (strlen($username) < 5) {
	$errors[] = "Username must be five characters or more.";
} 

if (strlen($password) < 5) {
	$errors[] = "Password must be five characters or more.";
}

if (sizeof($errors) == 0) {
	$user = mysqli_fetch_all(mysqli_query($link, "SELECT * FROM users WHERE username = '$username'"), MYSQLI_ASSOC)[0];

	if (empty($user)) {
		$errors[] = "There is no user with that username. Please try again.";
	} else {
		if (password_verify($password, $user["password"])) {
			$success = true;
		} else {
			$errors[] = "The user password does not match. Please try again.";
		}
	}
}
?>
<html>
<head>
	<title>Register User</title>
	<?php include('includes/header.php') ?>
</head>
<body>
	<div class="container" style="padding: 40px 0;">
		<?php if (sizeof($errors) > 0) { ?>
		<span>You have some errors:</span>
		<ul>
			<?php foreach($errors as $err) { ?>
			<li><?php echo $err; ?></li>
			<?php } ?>
		</ul>
		<a href="register.php">Go back to register.</a>
		<?php } else if ($success) { ?>
		<span>You are logged in. Welcome, <?php echo $user["username"] ?>.</span>
		<?php } else { ?>
		<span>An account was not created.</span>
		<?php } ?>
	</div>
	<?php include('includes/footer.php') ?>
</body>
</html>