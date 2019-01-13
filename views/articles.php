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
		<a href="admin">Admin Panel</a>
		<div>
			<?php foreach($articles as $a): ?>
			<div class="article">
				<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
				<em>Published:
				<?=$a['date']?>
				</em>
				<p><?=articles_intro($a['preview'])?></p>
			</div>
			<?php endforeach ?>
		</div>
		<footer class="page-footer font-small">
			<p class="footer-copyright text-center py-3">Blog <br> Copyright &copy; 2018</p>
		</footer>
	</div>
</body>
</html>
