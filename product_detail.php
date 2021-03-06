
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<?php include('./connection.php'); ?>
		<?php include('./menu2.php'); ?>
		<div id="wrapper" class="container">
			<?php include ('./menu.php'); ?>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/banner3.jpg" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
                                                            <?php 
                                                            
                                                            $id=$_GET['id'];
                                                             $sql=mysql_query("SELECT * FROM product WHERE id ='$id'")or die(mysql_error());
                                                             while($row = mysql_fetch_array($sql))
                                                                                       {
                                                                                           $image = $row['image'];
                                                                                           $name = $row['name'];
                                                                                           $code=$row['code'];
                                                                                           $price=$row['price'];
                                                                                           $brand=$row['brand'];
                                                                                           $catagory=$row['catagory'];
                                                                                             ?>
                                                             
                                                             
                                                            
                                                            <a href="themes/images/ladies/<?php echo $image?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="themes/images/<?php echo $image?>"></a>												
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="themes/images/ladies/<?php echo $image?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/<?php echo $image?>" alt=""></a>
									</li>								
									<li class="span1">
										<a href="themes/images/ladies/<?php echo $image?>" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="themes/images/<?php echo $image?>" alt=""></a>
									</li>													
									<li class="span1">
										<a href="themes/images/ladies/<?php echo $image?>" class="thumbnail" data-fancybox-group="group1" title="Description 4"><img src="themes/images/<?php echo $image?>" alt=""></a>
									</li>
									<li class="span1">
										<a href="themes/images/ladies/<?php echo $image?>" class="thumbnail" data-fancybox-group="group1" title="Description 5"><img src="themes/images/<?php echo $image?>" alt=""></a>
									</li>
								</ul>
                                                                                       
							</div>
							<div class="span5">
								<address>
									<strong>Brand:</strong> <span><?php echo $brand?></span><br>
									<strong>Product Code:</strong> <span><?php echo $code?></span><br>
									
									<strong>Availability:</strong> <span><?php echo $row['available'];?></span><br>								
								</address>									
								<h4><strong>Price: <?php echo $price?></strong></h4>
							</div>
							<div class="span5">
								
                            <div class="col-md-6">
                                <a class="btn btn-success" href="register.html">Add to cart</a>
                        </div><br>
						<div class="col-md-6">
                            <a class="btn btn-success" href="./bkash.php">Bkash</a>
                        </div>
				
							</div>	
                                                   
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home"> <?php echo $row['details'];?></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td><?php echo $row['size'];?></td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td><?php echo $row['color'];?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>	
                                                    <?php }?>
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
                                                                
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
                                                                                            <?php 
                                                            
                                                            
                                                             $sql=mysql_query("SELECT * FROM product WHERE catagory ='$catagory'")or die(mysql_error());
                                                             while($row = mysql_fetch_array($sql))
                                                                                       {
                                                                                           $image = $row['image'];
                                                                                           $name = $row['name'];
                                                                                           $code=$row['code'];
                                                                                           $price=$row['price'];
                                                                                           $brand=$row['brand'];
                                                                                           $catagory=$row['catagory'];
                                                                                             ?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.php?id=<?php echo $row['id']; ?>"><img alt="" src="themes/images/<?php echo $image?>"></a><br/>
														<a href="product_detail.php?id=<?php echo $row['id']; ?>" class="title"><?php echo $name?></a><br/>
														<a href="products.php?id=<?php echo $row['id']; ?>" class="category"><?php echo $catagory?></a>
														<p class="price"><?php echo $price?></p>
													</div>
												</li>
                                                                                       <?php }?>											
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<?php 
                                                            
                                                            
                                                             $sql=mysql_query("SELECT * FROM product WHERE catagory ='$catagory'")or die(mysql_error());
                                                             while($row = mysql_fetch_array($sql))
                                                                                       {
                                                                                           $image = $row['image'];
                                                                                           $name = $row['name'];
                                                                                           $code=$row['code'];
                                                                                           $price=$row['price'];
                                                                                           $brand=$row['brand'];
                                                                                           $catagory=$row['catagory'];
                                                                                             ?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href="product_detail.php?id=<?php echo $row['id']; ?>"><img alt="" src="themes/images/<?php echo $image?>"></a><br/>
														<a href="product_detail.php?id=<?php echo $row['id']; ?>" class="title"><?php echo $name?></a><br/>
														<a href="products.php?id=<?php echo $row['id']; ?>" class="category"><?php echo $catagory?></a>
														<p class="price"><?php echo $price?></p>
													</div>
												</li>
                                                                                       <?php }?>											
											</ul>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
                                             
					</div>
					
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about us.php">About Us</a></li>
							<li><a href="./contact.php">Contact Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2017@ Farjana Karim</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>