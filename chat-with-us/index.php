<?php require_once('../lib/head-utils.php'); ?>
<?php require_once('../lib/header.php'); ?>
	<!-- Start Headline-intro Content -->
	<section class="intro">
		<div class="container">
			<article class="post-content2">
				<h2>... just among friends</h2>
				<p class="paragraph">Please don't hesitate to contact me if you have any questions, concerns, or just wanna say, &ldquo;Hello!&rdquo;</p>
			</article>
			<!-- .post-content -->
		</div>
	</section>
	<!-- End Headline-intro Content -->
	<!-- Start Side Navigation -->
	<!-- Start Outbound Menu Item -->
	<!-- Start Side Navigation -->
	<div class="container">
		<div class="column">
			<div class="col-md-5 image-service-box">
				<div class="sidebar">
					<div class="squish-container">
						<nav class="example-menu">
							<ul>
								<li class="example-menu1"><a href="../inbound-marketing/index.php"><strong>InBound Marketing</strong></a> </li>
								<li class="example-menu2"><a href="../outbound-marketing/index.php"><strong>OutBound Marketing</strong></a></li>
								<li class="example-menu3"><a href="../cognitive-marketing/index.php"><strong>Cognitive Marketing </strong></a></li>
							</ul>
						</nav>
						<!-- .example-menu -->
					</div>
					<!-- .squish-container -->
				</div>
				<!-- .sidebar -->
			</div>
			<!-- .col-md-5 image-service-box -->
		</div>
		<!-- column-fluid -->
		<!-- End Side Navigation -->
		<!-- Start Poem -->
		<div class="col-med-7">
			<div class="poem">
				<h2>If</h2>
				<br>
				<div class="poem-inner">
					<div class="media-body">
						<p><strong>by Rudyard Kipling&#44; 1865 - 1936</p>
						<div class="white-space">
						</div>
						<p>
							If you can keep your head when all about you are losing theirs and blaming it on you. If you can trust yourself when all men doubt you&#44; but make allowance for their doubting too. If you can wait and not be tired by waiting&#44; or&#44; being lied about&#44; don&#39t deal in lies&#44; or&#44; being hated&#44; don&#39t give way to hating&#44; and yet don&#39t look too good&#44; nor talk too wise. If you can dream&mdash;and not make dreams your master. If you can think&mdash;and not make thoughts your aim. If you can meet with triumph and disaster and treat those two impostors just the same. If you can bear to hear the truth you&#39ve spoken awisted by knaves to make a trap for fools&#44; or watch the things you gave your life to broken&#44; and stoop and build ‘em up with wornout tools. If you can make one heap of all your winnings and risk it on one turn of pitch-and-toss&#44; and lose&#44; and start again at your beginnings and never breathe a word about your loss. If you can force your heart and nerve and sinew to serve your turn long after they are gone&#44; and so hold on when there is nothing in you except the Will which says to them: &ldquo;Hold on&rdquo;. If you can talk with crowds and keep your virtue&#44; or walk with kings&mdash;nor lose the common touch. If neither foes nor loving friends can hurt you. If all men count with you&#44; but none too much. If you can fill the unforgiving minute
							with sixty seconds&#39 worth of distance run&mdash;Yours is the Earth and everything that&#39s in it&hellip;<!--&#44; and&mdash;which is more&mdash;you&#39;ll be a Man&#44; my son&#33;-->
						</p>
					</div>
				</div>
			</div>
			<!-- testimonial -->
		</div>
		<!-- .col-med-7 -->
	</div>
	<!-- .container -->
	<!-- End Poem -->
	<!-- End Side Navigation -->
	<section id="contact-page">
		<div class="container">
			<div class="center">
				<h2>Would love to hear from you!</h2>
			</div>
			<div class="row contact-wrap">
				<div class="status alert alert-success" style="display: none"></div>
				<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action=".../php/swiftmailer.php">
					<div class="col-sm-5 col-sm-offset-1">
						<div class="form-group">
							<label>Name *</label>
							<input type="text" name="name" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Email *</label>
							<input type="email" name="email" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="number" class="form-control">
						</div>
						<div class="form-group">
							<label>Subject *</label>
							<input type="text" name="subject" class="form-control" required="required">
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Message *</label>
							<textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<!--/.row-->
		</div>
		<!--/.container-->
	</section>
	<!--/#contact-page-->
<?php require_once('../lib/footer.php'); ?>