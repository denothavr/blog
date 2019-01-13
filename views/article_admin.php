<!doctype html>
 
<html>
<head>
  <meta charset="utf-8">
 
  <title>Blog</title>
 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
 
<body>
	<div class="container">
		<h1>Blog</h1>
		<div>
			<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
				<div class="form-group">
					<label>
						Name
					</label>
					<input type="text" name="title" value="<?php if($_GET['action'] == "add") echo ''; else echo $article['title']?>" class="form-control" autofocus required>
				</div>
				<div class="form-group">
					<label>
						Preview
					</label>
					<textarea name="preview" class="form-control" required><?php if($_GET['action'] == "add") echo ''; else echo $article['preview']?></textarea>
				</div>
				<div class="form-group">
					<label>
						Date
					</label>
					<input type="date" name="date" value="<?php if($_GET['action'] == "add") echo ''; else echo $article['date']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>
						Content
					</label>
					<textarea name="content" class="form-control" required><?php if($_GET['action'] == "add") echo ''; else echo $article['content']?></textarea>
				</div>
				<input class="btn btn-primary" type="submit" name="btn" value="Save">
			</form>
		</div>
		<footer class="page-footer font-small">
			<p class="footer-copyright text-center py-3">Blog <br> Copyright &copy; 2018</p>
		</footer>
	</div>
</body>
</html>