<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="<?php echo $theme_path; ?>style.css" type="text/css" media="screen" charset="utf-8"/>
	<title><?php echo $title; ?> | Marksite Template</title>
</head>

<body>
	<header>

		<hgroup>
			<h1>Marksite Template</h1>
			<h2>The website title is changable in src/theme/page.php</h2>
		</hgroup>

		<nav id="mainMenu">
			<ul><?php echo $this->menu(0); ?></ul>
		</nav>

	</header>




	<article>
		<?php echo $contents; ?>
	</article>



	<footer>
		<p>
			Powered by <a href="http://marksite.m-wei.net">Marksite</a>.
			Syntax powered by <a href="http://daringfireball.net">Markdown</a>.
		</p>
	</footer>
</body>

</html>