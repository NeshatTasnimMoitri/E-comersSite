<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>E Commerce Store</title>
	<!--Bootstrap MaxCDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/style.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!--font awesome cdn-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
	<div id="top">	<!--Top Bar Start -->
		<div class="container">	<!--container Start -->
			<div class="col-md-6 offer">	<!--col-md-6 offer Start -->
				<a href="#" class="btn btn-success btn-sm">	
					Welcome Guest
				</a>
				<a href="#">
					Shopping Cart Total Price: BDT, Total Items 0 
				</a>
			</div>	<!--col-md-6 offer Start -->
			<div class="col-md-6">
				<ul class="menu">
					<li>
						<a href="customer_registration.php"> Register</a>
					</li>

					<li>
						<a href='checkout.php'>My Account</a>						
					</li>

					<li>
						<a href="cart.php"> Goto Cart</a>
					</li>

					<li>
						<a href='checkout.php'>Login</a>						
					</li>
				</ul>

			</div>
		</div>	<!--container End -->
	</div>	<!--Top Bar End -->


	<div class="navbar navbar-default" id="navbar"> <!--navbar navbar-default start -->
		<div class="container">
			<div class="navbar-header"> <!--navbar-header start -->
				<a class="navbar-brand home" href="index.php">
					<img src="images/logo.jpg" alt="teehosting" class="hidden-xs">
					<img src="images/logo-small.jpg" alt="teehosting" class="visible-xs">
				</a>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only"> Toggle Navigation</span>
					<i class="fa fa-align-justify"> </i>
				</button>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only"></span>
					<i class="fa fa-search"></i>
				</button>
			</div> <!--navbar-header start -->

			<div class="navbar-collapse collapse" id="navigation"> <!--navbar-collapse collapse start -->
				<div class="padding-nav">  <!--padding-nav start -->
					<ul class="nav navbar-nav navbar-left">
						<li >
							<a href="index.php">Home</a>
						</li>
						<li class="active">
							<a href="shop.php"> Shop</a>
						</li>
						<li>
							<a href='customer/my_account.php'>My Account</a>
						</li>


						<li>
							<a href="cart.php"> Shopping Cart</a>
						</li>
							
						<li>
							<a href="contactus.php"> Contact Us</a>
						</li>

					</ul>
				</div> <!--padding-nav start -->
				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span>0 items In Cart</span>
				</a>


				<div class="navbar-collapse collapse right"> <!--navbar-collapse collapse-right start -->
					<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
						<span class="sr-only"> Toggle Search</span>
						<i class="fa fa-search"></i>
					</button>
				</div> <!--navbar-collapse collapse-right End -->
				
				<div class="collapse clearfix" id="search">
						
					<form class="navbar-form" method="get" action="result.php">
						<div  class="input-group">
							<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
							<span class="input-group-btn">
								<button type="submit" value="Search" name="search" class="btn btn-primary" >
								<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
							
					</form>
				</div>

			</div> <!--navbar-collapse collapse End -->

		</div>
			

	</div> <!--navbar navbar-default End -->


	<div id="content">
		<div class="container"><!--container Start-->
			<div class="col-md-12"><!--col-md-12 Start-->
				<ul class="breadcrumb"> 
					<li><a href="home.php">Home</a></li>
					<li>
						Shop
					</li>
				</ul>
			</div><!--col-md-12 End-->

			<div class="col-md-3"><!--col-md-3 Start-->
				<?php
				include("includes/sidebar.php");
				?>
			</div><!--col-md-3 End-->
		

			<div class="col-md-9"><!--col-md-9 Start-->
				<div class='box'> 
					<h1>Shop</h1>
					<p>If you buy more than one product, you will get 5% discount for each purchase</p>

				</div>

				<div class="row"><!--row Start-->
					
					<div class='col-md-4 col-sm-6 center-responsive'>
						<div class='product'> 
							<a href='details.php?pro_id=6'> 
							<img src='admin_area/product_images/715qzelHh6L._UL1428_.jpg' class='img-responsive'>


							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=6'>Mens Cotton Hooded T-Shirt</a></h3>
								<p class='price'> BDT 559</p>
								<p class='buttons'>
								<a href='details.php?pro_id=6' class='btn btn-default'>View Details</a>
								<a href='details.php?pro_id=6' class='btn btn-primary'><i class='fa fa-shopping-cart'> </i>
								Add To Cart
								</a>
								</p>
							</div>
						</div>
					</div>


								
					<div class='col-md-4 col-sm-6 center-responsive'>
						<div class='product'> 
							<a href='details.php?pro_id=5'> 
							<img src='admin_area/product_images/jacket-1.jpg' class='img-responsive'>


							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=5'>hello</a></h3>
								<p class='price'> BDT 200
								</p>
								<p class='buttons'>
								<a href='details.php?pro_id=5' class='btn btn-default'>View Details</a>
								<a href='details.php?pro_id=5' class='btn btn-primary'><i class='fa fa-shopping-cart'> </i>
								Add To Cart
								</a>

						 		</p>
							</div>


						</div>



					</div>


								
					<div class='col-md-4 col-sm-6 center-responsive'>
						<div class='product'> 
							<a href='details.php?pro_id=4'> 
							<img src='admin_area/product_images/avast-2.png' class='img-responsive'>


							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=4'>sdgfd</a></h3>
								<p class='price'> BDT 200
								</p>
								<p class='buttons'>
								<a href='details.php?pro_id=4' class='btn btn-default'>View Details</a>
								<a href='details.php?pro_id=4' class='btn btn-primary'><i class='fa fa-shopping-cart'> </i>
								Add To Cart
								</a>

								 </p>
							</div>


						</div>



					</div>


								
					<div class='col-md-4 col-sm-6 center-responsive'>
						<div class='product'> 
							<a href='details.php?pro_id=3'> 
							<img src='admin_area/product_images/Black Blouse Versace Coat1.jpg' class='img-responsive'>


							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=3'>Lady T-Shirt</a></h3>
								<p class='price'> BDT 200
								</p>
								<p class='buttons'>
								<a href='details.php?pro_id=3' class='btn btn-default'>View Details</a>
								<a href='details.php?pro_id=3' class='btn btn-primary'><i class='fa fa-shopping-cart'> </i>
								Add To Cart
								</a>

								 </p>
							</div>


						</div>



					</div>


								
					<div class='col-md-4 col-sm-6 center-responsive'>
						<div class='product'> 
							<a href='details.php?pro_id=2'> 
							<img src='admin_area/product_images/acer-predator-300-2.jpg' class='img-responsive'>


							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=2'>DERBY Lace Up For Men  (Tan)</a></h3>
								<p class='price'> BDT 299
								</p>
								<p class='buttons'>
								<a href='details.php?pro_id=2' class='btn btn-default'>View Details</a>
								<a href='details.php?pro_id=2' class='btn btn-primary'><i class='fa fa-shopping-cart'> </i>
								Add To Cart
								</a>

								 </p>
							</div>


						</div>



					</div>


								
					<div class='col-md-4 col-sm-6 center-responsive'>
						<div class='product'> 
							<a href='details.php?pro_id=1'> 
							<img src='admin_area/product_images/1.jpg' class='img-responsive'>


							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=1'>Floral Print Buttoned</a></h3>
								<p class='price'> BDT 200
								</p>
								<p class='buttons'>
								<a href='details.php?pro_id=1' class='btn btn-default'>View Details</a>
								<a href='details.php?pro_id=1' class='btn btn-primary'><i class='fa fa-shopping-cart'> </i>
								Add To Cart
								</a>

								 </p>
							</div>


						</div>



					</div>


								

				</div><!--row End-->
				<center>
					<ul class="pagination">
						
						<li><a href='shop.php?page=1'> First Page</a> </li>
						
						<li><a href='shop.php?page=1'>1 </a> </li>
						
						<li><a href='shop.php?page=1'> Last Page</a> </li>

					</ul>
				</center>
			
						

			</div><!--col-md-9 End-->
		</div><!--container End-->
	
	</div><!--Content End-->



<!--Footer Start-->

<?php
include("includes/footer.php");
?>

<!--Footer End-->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>