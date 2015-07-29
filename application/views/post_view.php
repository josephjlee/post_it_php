<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Post It</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/stylesheets/style.css">
	<link href='http://fonts.googleapis.com/css?family=Crafty+Girls' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
		<div class="container">
			<h1>Post It!</h1>
			<form class="postForm" method="post" action="/posts_controller/create">
				<div class="form-group">
					<div class="input-group col-sm-6 col-sm-offset-3">
						<input type="text" class="postInput form-control" name="post" placeholder="Post your message here...">
						<span class="input-group-btn">
							<input type="hidden" name="submit">
							<input type="submit" class="btn btn-success" value="Post It!" onClick="clearform()">
						</span>
					</div>
				</div>
			</form>
		</div>
	</header>
	<main>
		<div class="container-fluid">
<?php foreach($posts as $post) { ?>
			<div class="col-sm-4 postIts">
				<p><?= $post['post']; ?></p>
			</div>
<?php } ?>
		</div>
	</main>
	<footer>
		<div class="container">
			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>
	</footer>

	<script type="text/javascript" src="assets/javascripts/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="assets/javascripts/main.js"></script>
</body>
</html>