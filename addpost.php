<?php include('includes/db.php') ?>
<html>
<head>
	<title>Add Post</title>
	<?php include('includes/header.php') ?>
</head>
<body>
	<div class="container" style="padding: 40px 0;">
		<form style="width: 60%; margin: 0 auto;" method="POST" action="submitpost.php">
			<div class="input-group">
				<input name="title" class="form-control" type="text" style="font-size: 2em;" placeholder="Blog Title" />
			</div>
			<div class="input-group">
				<textarea name="content" class="form-control" placeholder="Enter your blog post here." style="margin-top: 20px; height: 400px;"></textarea>
			</div>
			<div class="input-group">
				<input name="image_url" class="form-control" type="text" placeholder="Image URL" style="margin-top: 20px;"/>
			</div>
			<div class="input-group">
				<input name="author" class="form-control" type="text" placeholder="Author Name" style="margin-top: 20px;"/>
			</div>
			<input type="submit" class="btn btn-primary" style="margin-top: 20px;"/>
		</form>
	</div>
	<?php include('includes/footer.php') ?>
</body>
</html>