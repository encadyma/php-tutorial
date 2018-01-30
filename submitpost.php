<?php
include('includes/db.php');

$title = mysqli_real_escape_string($link, $_POST["title"]);
$content = mysqli_real_escape_string($link, $_POST["content"]);
$author = mysqli_real_escape_string($link, $_POST["author"]);
$image = mysqli_real_escape_string($link, $_POST["image_url"]);

$success = mysqli_query($link, "INSERT INTO posts (title, content, author, image_url) VALUES ('$title', '$content', '$author', '$image')");
?>
<html>
<head>
	<title>Submit Post</title>
	<?php include('includes/header.php') ?>
</head>
<body>
	<div class="container" style="padding: 40px 0;">
		<?php if ($success) { ?>
		<span>Your post was successfully submitted.</span>
		<?php } else { ?>
		<span>Your post could not be submitted.</span>
		<?php } ?>
	</div>
	<?php include('includes/footer.php') ?>
</body>
</html>