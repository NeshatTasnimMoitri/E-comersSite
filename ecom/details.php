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
							<a href='checkout.php'>My Account</a>
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






			<div class="col-md-9">
				<div class="row" id="productmain">
					<div class="col-sm-6"><!--col-sm-6 slider start-->
						<div id="mainimage">
							<div id="mycarousel" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
									<li data-target="#mycarousel" data-slide-to="1"></li>
									<li data-target="#mycarousel" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner"><!--carousel-inner start-->
									<div class="item active">
										<center>
											<img src="admin_area/product_images/715qzelHh6L._UL1428_.jpg" class="img-responsive">
										</center>
									</div>

									<div class="item">
										<center>
											<img src="admin_area/product_images/61MhQXA+5lL._UL1437_.jpg" class="img-responsive">
										</center>
									</div>

									<div class="item">
										<center>
											<img src="admin_area/product_images/613zqivjdwL._UL1500_.jpg" class="img-responsive">
										</center>
									</div>


								</div><!--carousel-inner End-->
								<a href="#mycarousel" class="left carousel-control" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
								</a>

								<a href="#mycarousel" class="right carousel-control" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
								</a>

							</div>
						</div>
					</div><!--col-sm-6 slider End-->
		
					<div class="col-sm-6">
						<div class="box"><!--box Start-->
							<h1 class="text-center">Mens Cotton Hooded T-Shirt</h1>
							<form action="details.php?add_cart=6" method="post" class="form-horizontal"><!--Form Start-->
								<div class="form-group"><!--form-group Start-->
									<label class="col-md-5 control-label">Product Quantity</label>
									<div class="col-md-7"><!--col-md-7 End-->
										<select name="product_qty" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>

									</div><!--col-md-7 End-->
								</div><!--form-group End-->
								<div class="form-group">
									<label class="col-md-5 control-label">Prouct Size</label>
										<div class="col-md-7">
											<select name="product_size" class="form-control">
												<option>Select a size</option>
												<option>Small</option>
												<option>Medium</option>
												<option>Large</option>
												<option>Extra Large</option>
											</select>
										</div>
								</div>
								<p class="price">Tk. 559</p>
								<p class="text-center buttons">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-shopping-cart"></i>Add to cart
									</button>
								</p>
							</form><!--Form End-->
						</div><!--box End-->


						<div class="col-xs-4">
							<a href="#" class="thumb">
								<img src="admin_area/product_images/715qzelHh6L._UL1428_.jpg" class="img-responsive">
							 </a>
						</div>
						<div class="col-xs-4">
							<a href="#" class="thumb">
								<img src="admin_area/product_images/61MhQXA+5lL._UL1437_.jpg" class="img-responsive">
							 </a>
						</div>
						<div class="col-xs-4">
							<a href="#" class="thumb">
								<img src="admin_area/product_images/715qzelHh6L._UL1428_.jpg" class="img-responsive">
							 </a>
						</div>

					</div>
				</div>

				<div class="box" id="details">
					<h4>Product Details</h4>
					<p>Comfort : Experience comfort to greatest extent with this pullover-hoodie T-shirt
					Sleeve Type: Full Sleeve Hoodies
					Neck type: V Neck
					Occasion: Casual T-Shirt.Light weight fabric sweeps sweat away from your skin and helps regulate body temperature
					Product color may slightly vary due to photographic lighting sources or your monitor settings</p>
					<h4>Size</h4>
					<ul>
						<li>Small</li>
						<li>Medium</li>
						<li>Large</li>
						<li>Extra Large</li>
					</ul>
				</div>

				<div id="row same-height-row"><!--row same-height-row Start-->
					<div class="col-md-12 col-sm-12"><!--col-md-3 col-sm-6 Start-->
						<div class="box"><!--box same-height headline Start-->
							<h3 class="text-center">You Also Like These Products</h3>
						</div><!--box same-height headline End-->

					</div><!--col-md-3 col-sm-6 End-->

					
					<div class='center-responsive col-md-3 col-sm-6'>
						<div class='product same-height'>
							<a href='details.php?pro_id=1'>
							<img src='admin_area/product_images/1.jpg' class='img-responsive'>
							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=1'>Floral Print Buttoned</a></h3>
								<p class='price'>Tk. 200</p>
							</div>
						</div>
					</div>


						
					<div class='center-responsive col-md-3 col-sm-6'>
						<div class='product same-height'>
							<a href='details.php?pro_id=2'>
							<img src='admin_area/product_images/acer-predator-300-2.jpg' class='img-responsive'>
							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=2'>DERBY Lace Up For Men  (Tan)</a></h3>
								<p class='price'>Tk. 299</p>
							</div>
						</div>
					</div>


						
					<div class='center-responsive col-md-3 col-sm-6'>
						<div class='product same-height'>
							<a href='details.php?pro_id=3'>
							<img src='admin_area/product_images/Black Blouse Versace Coat1.jpg' class='img-responsive'>
							</a>
							<div class='text'>
								<h3><a href='details.php?pro_id=3'>Lady T-Shirt</a></h3>
								<p class='price'>Tk. 200</p>
							</div>
						</div>
					</div>


					
				</div><!--row same-height-row End-->

			</div>

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