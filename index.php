<?php include('includes/db.php') ?>
<html>
<head>
	<title>Hello There</title>
	<?php include('includes/header.php') ?>
</head>
<body>
	<div class="container">
		<?php
		$posts = mysqli_fetch_all(mysqli_query($link, "SELECT * FROM posts ORDER BY id DESC"), MYSQLI_ASSOC);
		?>

		<div style="margin: 20px auto; max-width: 600px;">
			Hello guest! It seems like you haven't logged in. <a>Login?</a>
		</div>

		<?php foreach($posts as $post) { ?>
		<div class="card" style="width: 60%; margin: 20px auto;">
			<?php if ($post["image_url"]) { ?><img class="card-img-top" src="<?php echo $post["image_url"] ?>"/><?php } ?>
			<div class="card-body">
				<h2><?php echo $post["title"] ?></h2>
				<i>From <?php echo $post["author"] ?></i><br><br>
				<p><?php echo $post["content"] ?></p>
				<a href="#">See more</a>
			</div>
		</div>
		<?php } ?>
	</div>
	<?php include('includes/footer.php') ?>
</body>
</html>