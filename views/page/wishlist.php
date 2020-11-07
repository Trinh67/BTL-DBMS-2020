<!doctype html>
<html class="no-js" lang="">
    <?php require_once('../include/head.php') ?>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header section start -->
		<?php require_once('../include/header.php') ?>
        <!-- header section end -->
        <!-- pages-title-start -->
		<div class="pages-title section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="pages-title-text text-center">
							<h2>Wishlist</h2>
							<ul class="text-left">
								<li><a href="index.php">Home </a></li>
								<li><span> // </span>Wishlist</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- pages-title-end -->
		<!-- wishlist content section start -->
		<section class="pages wishlist-page section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="table-responsive padding60">
							<table class="wishlist-table text-center">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>Stock Status </th>
										<th>Add To Cart</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="td-img text-left">
											<a href="#"><img src="../../public/img/cart/1.png" alt="Add Product" /></a>
											<div class="items-dsc">
												<h5><a href="#">men’s black t-shirt</a></h5>
												<p class="itemcolor">Color : <span>Blue</span></p>
												<p class="itemcolor">Size   : <span>SL</span></p>
											</div>
										</td>
										<td>$56.00</td>
										<td>In Stock</td>
										<td>
											<div class="submit-text">
												<a href="cart.php">Add to cart</a>
											</div>
										</td>
										<td><i class="mdi mdi-close" title="Remove this product"></i></td>
									</tr>
									<tr>
										<td class="td-img text-left">
											<a href="#"><img src="../../public/img/cart/2.png" alt="Add Product" /></a>
											<div class="items-dsc">
												<h5><a href="#">men’s white t-shirt</a></h5>
												<p class="itemcolor">Color : <span>Blue</span></p>
												<p class="itemcolor">Size   : <span>SL</span></p>
											</div>
										</td>
										<td>$56.00</td>
										<td>In Stock</td>
										<td>
											<div class="submit-text">
												<a href="cart.php">Add to cart</a>
											</div>
										</td>
										<td><i class="mdi mdi-close" title="Remove this product"></i></td>
									</tr>
									<tr>
										<td class="td-img text-left">
											<a href="#"><img src="../../public/img/cart/3.png" alt="Add Product" /></a>
											<div class="items-dsc">
												<h5><a href="#">men’s white t-shirt</a></h5>
												<p class="itemcolor">Color : <span>Blue</span></p>
												<p class="itemcolor">Size   : <span>SL</span></p>
											</div>
										</td>
										<td>$56.00</td>
										<td>In Stock</td>
										<td>
											<div class="submit-text">
												<a href="cart.php">Add to cart</a>
											</div>
										</td>
										<td><i class="mdi mdi-close" title="Remove this product"></i></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- wishlist content section end -->
        <!-- footer section start -->
		<?php require_once('../include/footer.php') ?>
        <!-- footer section end -->
        
		<!-- all js here -->
		<!-- jquery latest version -->
        <?php require_once('../include/jquery.php') ?>
    </body>
</html>
