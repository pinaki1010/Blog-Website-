<header id="header" class="dark">
		<div class="container main-menu">
			<div class="row align-items-center d-flex">
				<div id="logo">
					<a href="index.php"><img src="img/logo2.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container" class="ml-auto">
					<ul class="nav-menu white">
						<li><a href="index.php">Home</a></li>
						<li><a class="<?php if(strcasecmp($pageName,'about me')==0) echo 'active'?>" href="about.php">About</a></li>
						<li><a class="<?php if(strcasecmp($pageName,'Portfolio')==0) echo 'active'?>" href="portfolio.php">Portfolio</a></li>
						<li><a class="<?php if(strcasecmp($pageName,'Blog')==0) echo 'active'?>" href="blog.php">Blog</a></li>
						<li><a class="<?php if(strcasecmp($pageName,'Contact us')==0) echo 'active'?>" href="contact.php">Contact us</a></li>
						</li>
						
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						<?php echo $pageName; ?>
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<a href="<?php echo $page; ?>"><?php echo $pageName; ?></a></p>
					</span>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->