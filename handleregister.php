<?php
include('includes/db.php');

$username = mysqli_real_escape_string($link, $_POST["username"]);
$email = mysqli_real_escape_string($link, $_POST["email"]);
$password = mysqli_real_escape_string($link, $_POST["password"]);
$confirmpassword = mysqli_real_escape_string($link, $_POST["confirmpassword"]);

$errors = [];

if (strlen($username) < 5) {
	$errors[] = "Username must be five characters or more.";
} 

if (strlen($password) < 5) {
	$errors[] = "Password must be five characters or more.";
} 

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors[] = "'$email' is not an email.";
} 

if ($password != $confirmpassword) {
	$errors[] = "Your passwords do not match.";
}

if (sizeof($errors) == 0) {
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$success = mysqli_query($link, "INSERT INTO users (password, username, email) VALUES ('$hashed_password', '$username', '$email')");
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
		<span>An account was successfully created.</span>
		<?php } else { ?>
		<span>An account was not created.</span>
		<?php } ?>
	</div>
	<?php include('includes/footer.php') ?>
</body>
</html>