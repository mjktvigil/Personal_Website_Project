<?php require_once('../lib/head-utils.php'); ?>
<link href="../css/card-styles.css" rel="stylesheet" type="text/css" media="all">
<!-- css references -->
<link href="../css/portfolio.css" rel="stylesheet" type="text/css" media="all">
<!-- script references -->
<script src="../js/portfolio.js"></script>

<!-------- HEADER -------->
<header>
	<?php require_once('../lib/header.php'); ?>
</header>
<body>
	<div class="container">
		<div class="row">
			<h1>Portfolio</h1>
<!-- start gallery image rows -->
			<div class="row">
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 1" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 2" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 4" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 6" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
			</div>
			<div class="row">
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 7" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 8" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 9" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 10" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 11" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 12" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
			</div>
			<div class="row">
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 13" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 14" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 15" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 16" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 17" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
				<div class="col-md-1 col-sm-4 col-xs-6"><a title="Image 18" href="#"><img class="thumbnail img-responsive" src="..//gallery/img/placeholder-150x250.jpg"></a></div>
			</div>
<!-- end gallery image rows -->
			<hr> <!-- divider line -->
			<p>This is text. Do I need this text??</p>
			<hr> <!-- divider line -->
		</div><!-- .row -->
	</div><!-- .container -->
<!-- start carousel -->
	<div class="modal" id="thumbnail-modal-id" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title"></h3>
				</div><!-- .modal-header -->
				<div class="modal-body">
					<div id="modalCarousel" class="carousel">
						<!-- start carousel -->
						<div class="carousel-inner">
						</div><!-- .carousel-inner -->
						<a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
						<a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
					</div> <!-- #modalCarousel .carousel -->
				</div> <!-- .modal-body -->
				<div class="modal-footer">
					<p>Hello. I'm a description block</p>
					<button class="btn btn-default" data-dismiss="modal">Close</button>
				</div><!-- .modal-footer -->
			</div><!-- .modal-content -->
		</div><!-- .modal-dialog -->
	</div><!-- .thumbnail-modal #thumbnail-modal-id -->
<!-- end carousel -->
</body>