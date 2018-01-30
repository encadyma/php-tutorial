<?php include('includes/db.php') ?>
<html>
<head>
	<title>Add Post</title>
	<?php include('includes/header.php') ?>
</head>
<body>
	<div class="container" style="padding: 40px 0;">
		<h1>Login</h1>
		<form style="width: 60%; margin: 0 auto;" method="POST" action="handlelogin.php">
			<div class="input-group">
				<input name="username" class="form-control" type="text" placeholder="Username" style="margin-top: 20px;"/>
			</div>
			<div class="input-group">
				<input name="password" class="form-control" type="text" placeholder="Password" style="margin-top: 20px;"/>
			</div>
			<input type="submit" value="Login" class="btn btn-primary" style="margin-top: 20px;"/>
		</form>
	</div>
	<?php include('includes/footer.php') ?>
</body>
</html>