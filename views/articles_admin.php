<!doctype html>
 
<html>
<head>
  <meta charset="utf-8">
 
  <title>Blog</title>
 
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
 
<body>
	<div class="container">
		<h1>Blog</h1>
		
		<div>
			<a href="index.php?action=add">Add Article</a>
			<table class="table">
				<tr>
					<th>Date</th>
					<th>Headline</th>
					<th></th>
					<th></th>
				</tr>
			
			<?php foreach($articles as $a): ?>
				<tr>
					<td><?=$a['date']?></td>
					<td><?=$a['title']?></td>
					<td>
						<a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a>
					</td>
					<td>
						<a href="index.php?action=delete&id=<?=$a['id']?>">Delete</a>
					</td>
				</tr>
			<?php endforeach ?>

			</table>
		</div>
		<footer>
			<p>Blog <br> Copyright &copy; 2018</p>
		</footer>
	</div>
</body>
</html>
