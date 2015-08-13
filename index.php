<?php require_once("lib/head-utils.php"); ?>
<body>
	<div class="container">
		<!-------- HEADER -------->
		<header>
			<?php require_once(dirname(__DIR__) . "lib/header.php"); ?>
		</header>
		<div class="row">
			<section class="side-panel col-md-3">
			</section>
			<main class="main-content col-md-9">
				<h1>Hello World</h1>
				<p>This is the main page content here.</p>
			</main>
		</div><!-- row -->
		<!-------- Footer -------->
		<footer class="footer">
			<?php require_once(dirname(__DIR__) . "lib/footer.php"); ?>
		</footer>
	</div><!-- .container -->
</body>
</html>