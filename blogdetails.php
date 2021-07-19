<?php 

	$page='blog.php';
	$pageName='Blog Details';
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
						

	<!-- Start Header Area -->
	<?php include 'header.php' ?>

	
	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<?php
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "blog";
							$conn = new mysqli($servername, $username, $password, $dbname);
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							
							}
							    $id=$_POST['id'];
								

							if(isset($_POST['comment'])){

										$name=$_POST['name'];
							            $email=$_POST['email'];
							            $message=$_POST['message'];
							            $sql = "INSERT INTO comment (blog_id,name,email,message)
							            VALUES ($id,'$name','$email','$message')";

							            if ($conn->query($sql) === TRUE) {
							            	$sql="UPDATE blogdetails SET comment=comment+1 where id=$id";
							            	$conn->query($sql);
							               echo "<div class='alert alert-success' role='alert'>
							                                            <strong>Well done!</strong>  Successfully Comment Updated....
							                                        </div>";

							            } else {
							                echo "Error: " . $sql . "<br>" . $conn->error;
							            }	
							      }else{
							      	$sql="UPDATE blogdetails SET view=view+1 where id=$id";
									$conn->query($sql);
								      }
								$sql = "SELECT * FROM blogdetails where id=$id";
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
									

					?>
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<?php echo '<img src="data:image/jpeg;base64 ,'.base64_encode( $row['image'] ).'" 	height="500" width="500"/>'; ?>
							</div>
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							
							<div class="user-details row">
								
								<p class="date col-lg-12 col-md-12 col-6"><?php echo $row['time']; ?><span class="lnr lnr-calendar-full"></span></p>
								<p class="view col-lg-12 col-md-12 col-6"><?php echo $row['view']; ?>  <span class="lnr lnr-eye"></span></p>
								<p class="comments col-lg-12 col-md-12 col-6"><?php echo $row['comment']; ?> <span class="lnr lnr-bubble"></span></p>
								
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<a class="posts-title" href="#"><h3><?php echo $row['title']; ?></h3></a>
							<p class="excert">
								<?php echo $row['descp']; ?>
							</p>
						</div> 
					</div>
				</div>
			</div>
			               <h4> Comments </h4>
			                 <?php
								$sql = "SELECT * FROM comment Where blog_id=$id ORDER BY time";
								$result = $conn->query($sql);
								

									?>

			<div class="comments-area" >
						
						<div class="comment-list" >
							<?php while($row = $result->fetch_assoc()) { ?>
							<div class="single-comment justify-content-between d-flex">
								<div class="user justify-content-between d-flex">
									<div class="thumb">
										<img src="img/blog/c1.png" alt="" height="50" width="50">
									</div>
									<div class="desc">
										<h5><?php echo $row['name'];?></h5>
										<p class="date"><?php echo $row['time'];?></p>
										<p class="comment">
											<?php echo $row['message'];?>
										</p>
									</div>
								</div>
							</div>
							<?php
								}?> 
						</div>
					</div>
					</div>
			 	</section>
			<div class="comment-form">
						<h4>Leave a Comment</h4>
						<form method="POST" action="blogdetails.php">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<div class="form-group form-inline">
								<div class="form-group col-lg-6 col-md-12 name">
									<input type="text" class="form-control" name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
								</div>
								<div class="form-group col-lg-6 col-md-12 email">
									<input type="email" class="form-control" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
								</div>
							</div>
							
							<div class="form-group">
								<textarea class="form-control mb-10" rows="5" name="message" placeholder="Comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							</div>
							<button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" name="comment" >POST COMMENT</button>

						    </div>
						</form>
					</div>
					
						
		       </div>
		


	
	<!-- End post-content Area -->

	<!-- Horizontal bar -->
	



								
						 


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
