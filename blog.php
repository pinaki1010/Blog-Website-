<?php 

	$page='blog.php';
	$pageName='Blog';
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
						<?php
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "blog";
							$conn = new mysqli($servername, $username, $password, $dbname);
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							
							} ?>

	<!-- Start Header Area -->
	<?php include 'header.php' ?>

	
	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<?php
								$sql = "SELECT * FROM blogdetails";
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc()) {
									

									?>
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<?php echo '<img src="data:image/jpeg;base64 ,'.base64_encode( $row['image'] ).'" width="05" height="350"/>'; ?>
							</div>
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							
							<div class="user-details row">
								
								<p class="date col-lg-12 col-md-12 col-6"><?php echo $row['time']; ?><span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><?php echo $row['view']; ?>  <span class="lnr lnr-eye"></span></p>
								<p class="comments col-lg-12 col-md-12 col-6"><?php echo $row['comment']; ?>  <span class="lnr lnr-bubble"></span></p>
								
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<a class="posts-title" href="#"><h3><?php echo $row['title']; ?></h3></a>
							<p class="excert">
								<?php echo $row['descp']; ?>
							</p>
 									
							<form action="blogdetails.php" method="POST">
							<input type="hidden"  name="id" value="<?php echo $row['id']; ?>"/>
							<input type="submit"  class="primary-btn" value="View More" name="View More" >
								
						</form>
						
						</div> 

					</div>

				<?php } ?>
				</div>
			</div>
		</div>
	</section>
	
	<!-- End post-content Area -->

	<!-- Horizontal bar -->
	<div class="container">
		<hr>
	</div>

	<!-- start footer Area -->
	<?php include'footer.php' ?>
	<!-- ####################### Start Scroll to Top Area ####################### -->
	<div id="back-top">
		<a title="Go to Top" href="#">
			<i class="lnr lnr-arrow-up"></i>
		</a>
	</div>
	<!-- ####################### End Scroll to Top Area ####################### -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/mn-accordion.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.circlechart.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>