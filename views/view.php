<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="mybook.css">
	<title>MyBooks</title>
</head>
<body>
	<header>
		<h1>MyBooks</h1>
	</header>
	<?php foreach ($books as $book): ?> 	
	<article>
		<h2><?php echo $book['book_title'] ?></h2>
		<p><?php echo $book['book_summary'] ?></p>
	</article>
	<?php endforeach ?>

	<footer class="footer">
		<p><strong>Mybook</strong> est construit avec PHP, Silex, Twig et Bootstrap.</p>
	</footer>
</body>
</html>